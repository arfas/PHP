<?php
function get_data(){
    $connect= mysqli_connect("localhost","root","","arfa");
    $query= "SELECT * FROM tblactor";
    $result= mysqli_query($connect, $query);
    $actor_data= array();
    while ($row = mysqli_fetch_array($result)){
        $actor_data[]=array(
            'name'          => $row["name"],
            'description'   => $row["description"],
            'dob'           => $row["dob"],
            'country'       => $row["country"],
            'image'         => $row["image"]
        );
    }
    return json_encode($actor_data);
}
    echo '<pre>';
    print_r (get_data());
    echo '</pre>';
?>






