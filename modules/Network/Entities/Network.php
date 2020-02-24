<?php

namespace Modules\Network\Entities;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    public static function register($user)
    {
        $node = Node::create(['id', $user->id]);

        $parent_node = NodeUnilevel::fill($user->indicator_id);
        NodeUnilevel::create([
            'node_id' => $node->id,
            'parent_node_id' => $parent_node->id,
            'lineage' => $parent_node->lineage . '/' . $parent_node->id,
            'status' => config('network.node.status.added'),
        ]);

        NodeBinary::create([
            'node_id' => $node->id,
            'parent_node_id' => null,
            'lineage' => null,
            'fixed_leg' => config('network.binary.leg.undefined'),
            //'work_leg' => Config('network.binary.leg.balanced'),
            //'status' => $Config('network.node.status.aspirant'),
        ]);

        return $node;
    }

    public static function setWorkLeg($node_id, $work_leg)
    {
        NodeBinary::where('node_id', $node_id)->update(compact('work_leg'));
    }

    public static function insertBinary($node_id, $node_indicator_id)
    {
        NodeBinary::add(
            $node_id,
            $node_indicator_id,
            config('network.node.status.added'), /* node_status */
            config('network.bonus.status.active'), /* bonus_status */
            config('network.binary.leg.balanced') /* work_leg */
        );
    }

}
