<?php
include"../config/database.php";

                    if(isset($_POST['Kirim'])){

                        $data = mysqli_query($con,"SELECT * FROM user_info WHERE username = '$_SESSION[username]'");
                        $r = mysqli_fetch_array($data);
                        $departemen = $r['departmen'];
                        $username = $_SESSION['form-username'];
                        $nama = $r['nama'];
                        $tanggal = $_POST['date-input'];
                        $departemen = $_POST['departemen'];
                        $jenis_kerusakan = $_POST['jenis-kerusakan'];
                        $kerusakan = $_POST['kerusakan'];

                        @$subject = mysqli_real_escape_string($con, $_POST["subject"]);
 
                        @$comment = mysqli_real_escape_string($con, $_POST["comment"]);


                        @$query = mysqli_connect($con,$sql);

                        @$sql = mysqli_query($con,"INSERT INTO report VALUES('$tanggal' , '$nama' , '$jenis_kerusakan', '$kerusakan' , '')");

                        echo "<script>alert('Data berhasil dikirim');document.location.href='?menu=user'</script>";
                            }

 ?>