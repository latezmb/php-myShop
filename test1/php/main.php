<?php
include("model_contents.php");
if(isset($_POST['contents']))
{
	$content = $_POST['contents'];
	$contentObj = new tbContent();
	$conn = $contentObj->connectdb();
	$contentObj->insert($conn,$content);
}
$selectObj = new tbContent();
$conn = $selectObj->connectdb();
$sql = "select contents from tb_content";
$data = $conn->query($sql);

if ($data->num_rows > 0) {
    // 输出数据
    while($row = $data->fetch_assoc()) {
        echo "<tr><td>".$row['contents']."</td></tr>";
    }
} else {
    echo "0 结果";
}

?>