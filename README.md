
- get single project by it's ID

$data = new Read_id;
$data = $data->Get_single();


- get all the project 

$data = new Read;
$data = $data->get_All();


- insert data :

$d = new Post($name, $github, $website,$description);


-Delete items (need 'id' variable on the url )

$s = new Delete;
$d = $s->Delete_item();