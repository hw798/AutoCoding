<?php

use Validator;

if (! function_exists('validator_input')) {

    function validator_input($rules, $input)
    {
        $messages = [
            'required' => ':attribute 字段必填',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'The :attribute must be exactly :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in'      => 'The :attribute must be one of the following types: :values',
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            throw new Exception($validator->errors()->toString());
        }

        return $input;
    }
}


if (! function_exists('table_to_rules')) {

    function table_to_rules($table_columns)
    {
        $messages = [
            'required' => ':attribute 字段必填',
            'same'    => 'The :attribute and :other must match.',
            'size'    => 'The :attribute must be exactly :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in'      => 'The :attribute must be one of the following types: :values',
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            throw new Exception($validator->errors()->toString());
        }

        return $input;
    }
}



if (! function_exists('swagger_params_by_columns')) {

    function swagger_params_by_columns($table_columns)
    {
        return $input;
    }
}


if (! function_exists('migration_by_columns')) {

    function migration_by_columns($table_columns)
    {
        return $input;
    }
}


if (! function_exists('migration_index_by_index')) {

    function migration_index_by_index($table_index)
    {
        return $input;
    }
}


