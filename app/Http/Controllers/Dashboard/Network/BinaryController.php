<?php

namespace App\Http\Controllers\Dashboard\Network;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Network\Entities\Network;
use Modules\Network\Entities\NodeBinary;
use Modules\Register\Entities\Membership;
use Modules\Register\Entities\User;

class BinaryController extends Controller
{
    public function strategy($username)
    {
        return view('app.network.strategy');
    }


    public function binary($username)
    {
        $user = User::where('username', $username)->first();
        if ($user->id == 1) {
            $user = User::find(2);
            $username = $user->username;
        }

        $membership = Membership::find($user->id);
        $node_binary = NodeBinary::find($user->id);

        $data['username'] = $username;
        $data += ['graduate' => config('register.graduate.label')[$membership->graduate]];
        $data += ['work_leg' => $node_binary->work_leg];
        $data += ['left_pv' => $node_binary->left_pv];
        $data += ['right_pv' => $node_binary->right_pv];
        $data += ['left_count' => $node_binary->left_count];
        $data += ['right_count' => $node_binary->right_count];
        $data += ['parent_username' => User::find($user->user_indicator_id)->username];
        $data += ['binary_parent_username' => $this->getParentUsername($node_binary)];
        $data += ['node' => NodeBinary::getPins($user->id)];
        //dd($data);

        return view('app.network.binary', $data);
    }


    private function getParentUsername($node)
    {
        $parent_node = NodeBinary::where('node_id', $node->parent_node_id)->first();
        $logged_node = NodeBinary::where('node_id', auth()->user()->id)->first();

        //  dd($logged_node->lineage, $parent_node->lineage);
        //dd($logged_node->lineage . '%');

        $beBelow = NodeBinary::where('node_id', '=', $parent_node->node_id)
            ->where('lineage', 'like', $logged_node->lineage . '%')
            ->exists();

        if ($beBelow) {
            return User::find($parent_node->node_id)->username;
        }
        return false;
    }


    public function workLeg($username, Request $request)
    {
        Network::setWorkLeg(auth()->user()->id, $request->get('work_leg'));
        return redirect()->back();
    }
}
