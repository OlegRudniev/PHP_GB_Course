<?php
class TaskService
{
    public static function AddComment(User $user, Task $task, string $text):void
    {
        $comment=new Comment ($user,$task,$text);
        $task->AddComment($comment);
    }    
}

class Comment 
{
    private User $autor;
    private Task $task;
    private string $text;
    public function __construct(User $autor, Task $task, string $text){
        $this->autor=$autor;
        $this->task=$task;
        $this->text=$text;
    }
}

class Task
{
    private User $user;
    private int $priority;
    private string $discription;
    private string $dateCreated;
    private string $dateUpdate;
    private bool $isDone;
    private string $dateDone;
    
    private array $comments;
    
    function __construct(User $user, int $priority, string $discription){
        $this->user = $user;
        $this->priority = $priority;
        $this->discription = $discription;
        $this->dateCreated = $this->dateUpdate=date('Y-m-d H:i:s');
    }
    public function setDiscription(string $discription):void 
    {
        $this->discription=$discription;
        $this->dateUpdate=date('Y-m-d H:i:s');
    } 
    public function getDiscription():string
    {
        return $this->discription;
    }
    public function markAsDone():void 
    {
        $this->dateDone=$this->dateUpdate=date('Y-m-d H:i:s');
        $this->isDone=true;
    }

    public function addComment(Comment $comment):void 
    {
        $this->comments[]=$comment;
    }
}
class User
{
    private string $userName;
    private string $email;
    function __construct(string $userName, string $email){
        $this->userName = $userName;
        $this->email = $email;
    }
}
$user=new User('Peter', 'peter25@mail.ru');
$task=new Task($user, 1, 'Oder1' );
$task->setDiscription('newDiscription');
$task->markAsDone();

$user2=new User('Boris', 'boris26@mail.ru');
TaskService::addComment($user2,$task,'Тут добавляется какой то комментарий');
var_dump($task);