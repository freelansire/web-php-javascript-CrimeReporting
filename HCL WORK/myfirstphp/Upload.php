<?
echo $_FILES['superfile1']['name'];
echo "<br/>";


echo $_FILES['superfile1']['size'];
echo "<br/>";


echo $_FILES['superfile1']['type'];
echo "<br/>";


echo $_FILES['superfile1']['value'];
echo "<br/>";

if(($_FILES['superfile1']['type']=="image/jpeg")||($_FILES['superfile1']['type']=="image/gif"))
{
    if (file_exists("uploaded_files/".$_FILES['superfile1']['name']))
    {
	    echo "file is already exists";
	}
	else
	{
	     if(move_uploaded_file($_FILES['superfile1']['tmp_name'],
		     "uploaded_files/".$_FILES['superfile1']['name']))
          {
	          echo "Congrats ........file is uploaded...u r genius user..";
            }
         else
          {
              echo " what r u doing?   kuchh to achha karo?";
             }
     }
}

else
{
  echo "File format not supported....";
  }
?>