
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


- update item 

   - need 'id' variable on the url AND u have to give the new info 
   - if you need to update the name ou should sned the var(name ) in the url
   - if you need to update the Github link ou should sned the var(Github) in the url
   - if you need to update the Website link ou should sned the var(Website ) in the url
   - if you need to update the Description ou should sned the var(Desc ) in the url



$s = new Update_item;
 $d = $s->Update();
