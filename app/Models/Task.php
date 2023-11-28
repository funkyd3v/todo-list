<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'description', 'long_description'];
    protected static $task;

    public static function storeData($request)
    {
        $data = $request->validated();
    
        self::$task = new Task();
        self::$task->title = $data['title'];
        self::$task->description = $data['description'];
        self::$task->long_description = $data['long_description'];
        self::$task->save();
    }

    public static function updateData($request)
    {
        $data = $request->validated();
        self::$task = Task::findOrFail($request->id);
        if (self::$task) {
            self::$task->title = $data['title'];
            self::$task->description = $data['description'];
            self::$task->long_description = $data['long_description'];
            self::$task->save();
        } else {
            return redirect()->to('/')->with('message', 'Somthing went wrong!');
        }
        
    }

    public static function toogleComplete($id)
    {
        self::$task = Task::findOrFail($id);
        if (self::$task) {
            self::$task->completed = !self::$task->completed;
            self::$task->save();
        }
    }
    
}
