<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@home')->name('home')->middleware('guest');

/** --------------------------------------------------------------------------
 *  Tool Routes
 *  ----------------------------------------------------------------------- */

Route::group(['namespace' => 'Tool', 'middleware' => 'guest'], function () {
    Route::get('ajaxRequest', 'TestController@ajaxRequest');
    Route::post('ajaxRequest', 'TestController@ajaxRequestPost');
    Route::get('geographer', 'TestController@geographer');
    Route::get('config2object', 'TestController@config2Objectt');
    Route::get('confirmtest', 'TestController@confirmTest');
});

Route::group(['prefix' => 'labs', 'namespace' => 'Labs'], function () {
    Route::get('login', 'LabsController@login');
    Route::get('login-disabled', 'LabsController@loginDisabled');
    Route::get('login-help', 'LabsController@loginHelp');
    Route::get('captcha', 'LabsController@captcha');
    Route::get('register-1', 'LabsController@register1');
    Route::get('register-2', 'LabsController@register2');
    Route::get('register-3', 'LabsController@register3');
    Route::get('register-disabled', 'LabsController@registerDisabled');
    Route::get('register-minimum-requirements', 'LabsController@registerMinimumRequirements');
    Route::get('forgot-password', 'LabsController@forgotPassword');
    Route::get('forgot-email', 'LabsController@forgotEmail');
    Route::get('user-blocked', 'LabsController@userBlocked');
    Route::get('user-banned', 'LabsController@userBanned');
    Route::get('under-maintenance', 'LabsController@underMaintenance');
    Route::get('page-404', 'LabsController@page404');
    Route::get('page-500', 'LabsController@page500');
    Route::get('inactivity', 'LabsController@inactivity');
});

/** --------------------------------------------------------------------------
 *  Temporary Routes
 *  --------------------------------------------------------------------------
 */

Route::redirect('/monster', '/monster/php-to-js-vars', 302);
Route::get('/monster/php-to-js-vars', 'MonsterController@PHPToJSVars')->name('monster.demos.phptojsvars');

//Route::prefix('conta')->group(function () {
//    Route::get('perfil', function () {
//        return view('dashboard.conta.perfil');
//    })->name('dashboard.conta.perfil');
//});

//Route::prefix('ecommerce')->group(function () {
//    Route::get('categorias', function () {
//        return view('dashboard.ecommerce.categorias');
//    })->name('dashboard.ecommerce.categorias');
//
//    Route::get('produtos', function () {
//        return view('dashboard.ecommerce.produtos');
//    })->name('dashboard.ecommerce.produtos');
//
//    Route::get('pedidos', function () {
//        return view('dashboard.ecommerce.pedidos');
//    })->name('dashboard.ecommerce.pedidos');
//
//    Route::get('meus-pedidos', function () {
//        return view('dashboard.ecommerce.meus-pedidos');
//    })->name('dashboard.ecommerce.meus-pedidos');
//
////    Route::get('checkout', function () {
////        return view('dashboard.ecommerce.checkout');
////    })->name('dashboard.ecommerce.checkout');
//});

Route::prefix('financeiro')->group(function () {
    Route::get('credito-debito', function () {
        return view('dashboard.financeiro.credito-debito');
    })->name('dashboard.financeiro.credito-debito');

    Route::get('historico-financeiro', function () {
        return view('dashboard.financeiro.historico-financeiro');
    })->name('dashboard.financeiro.historico-financeiro');

    Route::get('gerenciar-saque', function () {
        return view('dashboard.financeiro.gerenciar-saque');
    })->name('dashboard.financeiro.gerenciar-saque');

    Route::get('historico-saque', function () {
        return view('dashboard.financeiro.historico-saque');
    })->name('dashboard.financeiro.historico-saque');

    Route::get('solicitar-saque', function () {
        return view('dashboard.financeiro.solicitar-saque');
    })->name('dashboard.financeiro.solicitar-saque');
});

Route::prefix('voucher')->group(function () {
    Route::get('/admin', function () {
        return view('dashboard.voucher.voucher-admin');
    })->name('dashboard.voucher.voucher-admin');
    Route::get('/', function () {
        return view('dashboard.voucher.voucher');
    })->name('dashboard.voucher.voucher');
});

//Route::prefix('rede')->group(function () {
//    Route::get('unilevel', function () {
//        return view('dashboard.rede.unilevel');
//    })->name('dashboard.rede.unilevel');
//
//    Route::get('binario', function () {
//        return view('dashboard.rede.binario');
//    })->name('dashboard.rede.binario');
//
//    Route::get('historico-carreira', function () {
//        return view('dashboard.rede.historico-carreira');
//    })->name('dashboard.rede.historico-carreira');
//});

Route::prefix('pontuacao')->group(function () {
    Route::get('qualificacao', function () {
        return view('dashboard.pontuacao.qualificacao');
    })->name('dashboard.pontuacao.qualificacao');

    Route::get('comissao', function () {
        return view('dashboard.pontuacao.comissao');
    })->name('dashboard.pontuacao.comissao');

    Route::get('pool-point', function () {
        return view('dashboard.pontuacao.pool-point');
    })->name('dashboard.pontuacao.pool-point');
});

Route::prefix('admin')->group(function () {
    Route::get('usuario', function () {
        return view('dashboard.admin.usuario');
    })->name('dashboard.admin.usuario');

    Route::get('relatorio-atividade', function () {
        return view('dashboard.admin.relatorio-atividade');
    })->name('dashboard.admin.relatorio-atividade');

    Route::get('aprovar-documento', function () {
        return view('dashboard.admin.aprovar-documento');
    })->name('dashboard.admin.aprovar-documento');
});

Route::prefix('configuracoes')->group(function () {
    Route::get('emails', function () {
        return view('dashboard.configuracoes.emails');
    })->name('dashboard.configuracoes.emails');
});

/** --------------------------------------------------------------------------
 *  App Routes
 *  ----------------------------------------------------------------------- */

Route::group(['prefix' => '{username}/', 'namespace' => 'Dashboard', 'as' => 'dashboard', 'middleware' => 'auth'],
    function () {

        Route::get('/', 'HomeController@home')->name('.home');

        # Account Management
        Route::group(['namespace' => 'Account', 'as' => '.account'], function () {
            # Profile Management
            Route::get('profile', 'ProfileController@edit')->name('.profile');
            Route::post('profile', 'ProfileController@update');
            Route::post('profile/update_avatar', 'ProfileController@updateAvatar');
            # Preferences Management
//        #Route::get('preferences', 'PreferencesController@edit')->name('.references');
//        #Route::post('preferences', 'PreferencesController@update');
            # Security Management
//        #Route::get('security', 'SecurityController@edit')->name('.security');
//        #Route::post('security', 'SecurityController@update');
        });

        # eCommerce Management
        Route::group(['prefix' => 'ecommerce', 'namespace' => 'ECommerce', 'as' => '.ecommerce'], function () {

            Route::get('categories', 'ECommerceController@categories')->name('.categories');
//        Route::get('categories', function () {
//            return view('dashboard.ecommerce.categories');
//        })->name('.categories');

            Route::get('products', 'ECommerceController@products')->name('.products');
//        Route::get('products', function () {
//            return view('dashboard.ecommerce.products');
//        })->name('.products');

            Route::get('orders', 'ECommerceController@orders')->name('.orders');

            Route::get('my_orders', 'ECommerceController@myOrders')->name('.my_orders');
//        Route::get('my_orders', function () {
//            return view('dashboard.ecommerce.my_orders');
//        })->name('.my_orders');

            //Route::post('checkout', 'StoreController@checkout')->name('.checkout');

        });

        # Finances
        Route::group(['prefix' => 'finances', 'namespace' => 'Finances', 'as' => '.finances'], function () {

            Route::post('transactions', 'StratumController@transactions')->name('.transactions');
//        Route::get('credito-debito', function () {
//            return view('dashboard.financeiro.credito-debito');
//        })->name('dashboard.financeiro.credito-debito');

            Route::post('history', 'StratumController@financialHistory')->name('.history');
//        Route::get('historico-financeiro', function () {
//            return view('dashboard.financeiro.historico-financeiro');
//        })->name('dashboard.financeiro.historico-financeiro');

            Route::post('withdraw/manage', 'WithdrawController@toManage')->name('.withdraw.manage');
//        Route::get('gerenciar-saque', function () {
//            return view('dashboard.financeiro.gerenciar-saque');
//        })->name('dashboard.financeiro.gerenciar-saque');

            Route::post('balance', 'StratumController@balance')->name('.balance');
//        Route::get('historico-financeiro', function () {
//            return view('dashboard.financeiro.historico-financeiro');
//        })->name('dashboard.financeiro.historico-financeiro');

            Route::post('widthdraw/history', 'WithdrawController@history')->name('.widthdraw.history');
//        Route::get('historico-saque', function () {
//            return view('dashboard.financeiro.historico-saque');
//        })->name('dashboard.financeiro.historico-saque');

            Route::post('withdraw/request', 'WithdrawController@request')->name('.withdraw.request');
//        Route::get('solicitar-saque', function () {
//            return view('dashboard.financeiro.solicitar-saque');
//        })->name('dashboard.financeiro.solicitar-saque');

        });

        # Voucher
        Route::group(['prefix' => 'vouchers', 'as' => '.vouchers'], function () {

            //Route::post('admin', 'VoucherController@request')->name('.admin');
//        Route::get('/admin', function () {
//            return view('dashboard.voucher.voucher-admin');
//        })->name('dashboard.voucher.voucher-admin');
            //Route::post('/', 'VoucherController@request')->name('.voucher');
//        Route::get('/', function () {
//            return view('dashboard.voucher.voucher');
//        })->name('dashboard.voucher.voucher');

        });

        # Network Management
        Route::group(['prefix' => 'network', 'namespace' => 'Network', 'as' => '.network'], function () {

            Route::get('unilevel', 'UnilevelController@unilevel')->name('.unilevel');
//        Route::get('unilevel', function () {
//            return view('dashboard.rede.unilevel');
//        })->name('.unilevel');

            Route::get('binary', 'BinaryController@binary')->name('.binary');
//            Route::get('binario', function () {
//                return view('dashboard.rede.binario');
//            })->name('.binario');
//        Route::post('workleg', 'BinaryController@workLeg')->name('.workleg');

            Route::get('binary/strategy', 'BinaryController@strategy')->name('.strategy'); # Fora do projeto
//        Route::get('binary/strategy', function () {
//            return view('dashboard.rede.binario');
//        })->name('.binary.strategy');

            Route::get('career_history', 'NetworkController@careerHistory')->name('.career_history');
//        Route::get('career_history', function () {
//            return view('dashboard.rede.historico-carreira');
//        })->name('.career_history');

        });

        # Pontuação
        Route::group(['prefix' => 'score', 'namespace' => 'Score', 'as' => '.score'], function () {

//            Route::get('qualification', 'ScoreController@qualification')->name('.qualification');
//        Route::get('qualificacao', function () {
//            return view('dashboard.pontuacao.qualificacao');
//        })->name('dashboard.pontuacao.qualificacao');

//            Route::get('commission', 'ScoreController@commission')->name('.commission');
//        Route::get('comissao', function () {
//            return view('dashboard.pontuacao.comissao');
//        })->name('dashboard.pontuacao.comissao');

//            Route::get('pool', 'ScoreController@pool')->name('.pool');
//        Route::get('pool-point', function () {
//            return view('dashboard.pontuacao.pool-point');
//        })->name('dashboard.pontuacao.pool-point');

        });

        # Admin
        Route::group(['prefix' => 'management', 'namespace' => 'Management', 'as' => '.management'], function () {

//            Route::get('users', 'ManagementController@users')->name('.users');
//        Route::get('usuario', function () {
//            return view('dashboard.admin.usuario');
//        })->name('dashboard.admin.usuario');
//
//            Route::get('activity_report', 'ManagementController@activityReport')->name('.activity_report');
//        Route::get('relatorio-atividade', function () {
//            return view('dashboard.admin.relatorio-atividade');
//        })->name('dashboard.admin.relatorio-atividade');
//
//            Route::get('document_approval', 'ManagementController@documentApproval')->name('.document_approval');
//        Route::get('aprovar-documento', function () {
//            return view('dashboard.admin.aprovar-documento');
//        })->name('dashboard.admin.aprovar-documento');

        });

        # Configurações
        Route::prefix('configuration')->group(function () {
//        Route::get('emails', function () {
//            return view('dashboard.configuracoes.emails');
//        })->name('dashboard.configuracoes.emails');
        });

    });
