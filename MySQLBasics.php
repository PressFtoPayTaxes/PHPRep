<?php

function db_connection(){
    return mysqli_connect([
        "host" => "localhost",
        "user" => "root",
        "password" => "",
        "database" => "books"]);
}

function db_query($query){
    $connection = db_connection();

    $result = mysqli_query($connection, $query);

    mysqli_close($connection);
}

function db_create($table, $columns = []){
    $query = "CREATE TABLE `{$table}`(";

    foreach($columns as $column){
        $col = "`{$column['name']}` ";
        foreach($column as $key => $value){
            if($key == 'name')
                continue;
            if(is_null($value)){
                $col .= $key . " ";
            }
            else{
                $col .= "{$key}({$value}) ";
            }
        }
        $query .= ",";
    }

    $query[strlen($query) - 1] = ")";

    db_query($query);
}

function db_drop($table){
    $query = "DROP TABLE `{$table}`";
    db_query($query);
}

function db_alter($table, array $args){
    $query = "ALTER TABLE `{$table}`";

    if(!isset($args["operation"]) || !isset($args["name"]))
        return false;

    if($args["operation"] == 'drop'){
        $query .= " DROP COLUMN";
    }
    else if($args["operation"] == 'add'){
        $query .= " ADD COLUMN";

        if(!isset($args['name']))
            return false;

        $query .= " `{$args["name"]}`";
        foreach($args as $key => $value){
            $query .= " {$key}";
            if($value !== null){
                $query .= "({$value})";
            }
        }
    }
    else{
        return false;
    }

    db_query($query);
    return true;
}