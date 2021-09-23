<?php

namespace Chondal\ModelHistory\Traits;

use Illuminate\Support\Facades\Auth;

trait HasHistory
{

    public function createHistory($text)
    {
        try {
            $this->historys()->create([
                'body' => $text,
                'author_id' => (Auth::check()) ? Auth::user()->id : null,
            ]);

            return true;
        } catch (\Exception$ex) {
            return $ex->getMessage();
        }
    }

    public function historys()
    {
        return $this->morphMany(\Chondal\ModelHistory\Models\History::class, 'historyable');
    }

    public function historyModel()
    {
        return [
            'model' => get_class($this),
            'id' => $this->id,
        ];
    }

}
