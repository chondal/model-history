<?php

namespace Chondal\ModelHistory;

class ModelHistory
{
    public function table($model = null, $class = null)
    {
        if (is_null($model)) {
            return view('ModelHistory::error', [
                'message' => 'enviar modelo',
            ]);
        }
        return view('ModelHistory::table', [
            'model' => $model,
            'class' => (!is_null($class)) ? $class : config('history.style.table'),
        ]);
    }

}
