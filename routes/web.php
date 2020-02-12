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

Route::get('/', 'HomeController@welcome')->name('welcome')->middleware('guest');

/** --------------------------------------------------------------------------
 *  Tool Routes
 *  ----------------------------------------------------------------------- */

Route::group(['namespace' => 'Tool'], function () {
    Route::get('locale/{locale}', 'LocalizationController@update');

    Route::get('ajaxRequest', 'TestController@ajaxRequest');
    Route::post('ajaxRequest', 'TestController@ajaxRequestPost');

    Route::get('geographer', 'TestController@geographer');

    Route::get('config2object', 'TestController@config2Objectt');

    Route::get('confirmtest', 'TestController@confirmTest');
});

/** --------------------------------------------------------------------------
 *  Auth Routes
 *  ----------------------------------------------------------------------- */

Route::group(['namespace' => 'Auth', 'middleware' => 'guest'], function () {

    # LogIn Routes
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');

    Route::get('invitation/{indicator}', 'CheckEmailController@showCheckForm');

    # LogUp Routes
    Route::group(['prefix' => 'signup', 'as' => 'signup'], function () {
        # Step 1
        Route::get('/', 'CheckEmailController@showCheckForm')->name('.check');
        Route::post('/', 'CheckEmailController@check');
        # Step 2
        Route::get('register', 'RegisterController@showRegistrationForm')->name('.register');
        Route::post('register', 'RegisterController@register');
    });

//    # Confirm Password Routes
//    Route::get('confirm/{token?}', 'ConfirmPasswordController@showConfirmForm')->name('.confirm');
//    Route::post('confirm', 'ConfirmPasswordController@confirm');

    # Password Routes
    Route::group(['prefix' => 'password', 'as' => 'password'], function () {
        # Reset Password Routes
        Route::get('reset', 'ForgotPasswordController@showLinkRequestForm')->name('.request');
        Route::post('email', 'ForgotPasswordController@sendResetLinkEmail')->name('.email');
        Route::get('reset/{token}', 'ResetPasswordController@showResetForm')->name('.reset');
        Route::post('reset', 'ResetPasswordController@reset')->name('.update');
    });

});

Route::post('logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');

Route::group(['prefix' => 'signup', 'as' => 'signup', 'namespace' => 'Auth', 'middleware' => 'auth',], function () {
    # Step 3
    Route::get('confirm', 'EmailConfirmController@showConfirmForm')->name('.confirm');
    Route::post('confirm', 'EmailConfirmController@confirm');
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

Route::group(['prefix' => '{username}/', 'namespace' => 'Dashboard', 'as' => 'dashboard', 'middleware' => 'auth'], function () {

    Route::get('/', 'HomeController@home')->name('.home');

    # Account Management
    Route::group(['namespace' => 'Account', 'as' => '.account'], function () {
        # Profile Management
//        Route::get('profile', 'ProfileController@edit')->name('.profile');
//        Route::post('profile', 'ProfileController@update');
//        # Preferences Management
//        #Route::get('preferences', 'PreferencesController@edit')->name('.references');
//        #Route::post('preferences', 'PreferencesController@update');
//        # Security Management
//        #Route::get('security', 'SecurityController@edit')->name('.security');
//        #Route::post('security', 'SecurityController@update');
    });

    # Network Management
    Route::group(['prefix' => 'network', 'namespace'=>'Network', 'as' => '.network'], function () {

//        Route::get('unilevel', 'UnilevelController@unilevel')->name('.unilevel');
//        Route::get('unilevel', function () {
//            return view('dashboard.rede.unilevel');
//        })->name('.unilevel');

        # Route::get('binary/strategy', 'BinaryController@strategy')->name('.strategy'); # Fora do projeto
//        Route::get('binary/strategy', function () {
//            return view('dashboard.rede.binario');
//        })->name('.binary.strategy');

//        Route::get('binary', 'BinaryController@binary')->name('.binary');
//            Route::get('binario', function () {
//                return view('dashboard.rede.binario');
//            })->name('.binario');
//        Route::post('workleg', 'BinaryController@workLeg')->name('.workleg');

//        Route::get('career_history', 'NetworkController@careerHistory')->name('.career_history');
//        Route::get('career_history', function () {
//            return view('dashboard.rede.historico-carreira');
//        })->name('.career_history');

    });

    # eCommerce
    Route::group(['prefix' => 'ecommerce', 'as' => '.ecommerce'], function () {
//
//        Route::get('categories', function () {
//            return view('dashboard.ecommerce.categories');
//        })->name('.categories');
//
//        Route::get('products', function () {
//            return view('dashboard.ecommerce.products');
//        })->name('.products');
//
//        Route::get('orders', 'ECommerceController@orders')->name('.orders');
//
//        Route::get('my_orders', function () {
//            return view('dashboard.ecommerce.my_orders');
//        })->name('.my_orders');
//
//        Route::post('checkout', 'StoreController@checkout')->name('.checkout');
//
    });

    # Finances
    Route::group(['prefix' => 'finances', 'namespace'=>'Finances', 'as' => '.finances'], function () {
//    Route::prefix('financeiro')->group(function () {
//        # Credit and Debit
//        Route::post('transactions', 'StratumController@transactions')->name('.transactions');
//        Route::get('credito-debito', function () {
//            return view('dashboard.financeiro.credito-debito');
//        })->name('dashboard.financeiro.credito-debito');
//
//        Route::post('history', 'StratumController@financialHistory')->name('.history');
//        Route::get('historico-financeiro', function () {
//            return view('dashboard.financeiro.historico-financeiro');
//        })->name('dashboard.financeiro.historico-financeiro');
//
//        Route::post('withdraw/manage', 'WithdrawController@toManage')->name('.withdraw.manage');
//        Route::get('gerenciar-saque', function () {
//            return view('dashboard.financeiro.gerenciar-saque');
//        })->name('dashboard.financeiro.gerenciar-saque');
//
//        Route::post('widthdraw/history', 'WithdrawController@history')->name('.widthdraw.history');
//        Route::get('historico-saque', function () {
//            return view('dashboard.financeiro.historico-saque');
//        })->name('dashboard.financeiro.historico-saque');
//
//        Route::post('withdraw/request', 'WithdrawController@request')->name('.withdraw.request');
//        Route::get('solicitar-saque', function () {
//            return view('dashboard.financeiro.solicitar-saque');
//        })->name('dashboard.financeiro.solicitar-saque');
    });

    # Voucher
    Route::prefix('voucher')->group(function () {
//        Route::get('/admin', function () {
//            return view('dashboard.voucher.voucher-admin');
//        })->name('dashboard.voucher.voucher-admin');
//        Route::get('/', function () {
//            return view('dashboard.voucher.voucher');
//        })->name('dashboard.voucher.voucher');
    });
//
    # Pontuação
    Route::prefix('pontuacao')->group(function () {
//        Route::get('qualificacao', function () {
//            return view('dashboard.pontuacao.qualificacao');
//        })->name('dashboard.pontuacao.qualificacao');
//
//        Route::get('comissao', function () {
//            return view('dashboard.pontuacao.comissao');
//        })->name('dashboard.pontuacao.comissao');
//
//        Route::get('pool-point', function () {
//            return view('dashboard.pontuacao.pool-point');
//        })->name('dashboard.pontuacao.pool-point');
    });

    # Admin
    Route::prefix('admin')->group(function () {
//        Route::get('usuario', function () {
//            return view('dashboard.admin.usuario');
//        })->name('dashboard.admin.usuario');
//
//        Route::get('relatorio-atividade', function () {
//            return view('dashboard.admin.relatorio-atividade');
//        })->name('dashboard.admin.relatorio-atividade');
//
//        Route::get('aprovar-documento', function () {
//            return view('dashboard.admin.aprovar-documento');
//        })->name('dashboard.admin.aprovar-documento');
    });

    # Configurações
    Route::prefix('configuracoes')->group(function () {
//        Route::get('emails', function () {
//            return view('dashboard.configuracoes.emails');
//        })->name('dashboard.configuracoes.emails');
    });

});
