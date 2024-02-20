<?php
include("header.php");
session_start();

?>


<!-- .....................download filter in excel form database of contact_us......................... -->
<?php
$con = mysqli_connect('localhost', 'root', '', 'jewel_webnet') or die('Unable to connect');
$query = $con->query("SELECT * FROM contact_us ORDER BY id ASC");
// $query1 = " select * from subscribers order by id acs ";
// $subscribers = mysqli_query($con, $query1);
?>

<!-- ....................download filter in excel form database of contact_us........................ -->
<style>
    /* a{
        padding:0px 5px;
    } */
</style>
<div class="container mx-auto mt-16 w-full">
    <div class="text-right">
        <button class="border border-gray-400 px-4 py-2 my-4 font-semibold bg-sky-950 text-white rounded-md">
            <a href="logout.php">logout</a>
        </button>
    </div>

    <!-- <div class="text-right">
    <button class="border border-black rounded-lg text-sky-950 px-4 py-2 font-semibold my-2"><span class="pr-2"><i class="fa-solid fa-file-excel"></i></span>Download</button>
</div> -->
    <div>


        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Contact Us Details</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Subscribers Details</button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <table class="w-full">
                    <tbody class=" overflow-hidden w-full">
                        <tr class="border border-gray-400">
                            <th class="border border-gray-400 p-2">Id</th>
                            <th class="border border-gray-400  p-2">Name</th>
                            <th class="border border-gray-400 p-2">Email</th>
                            <th class="border border-gray-400  p-2" style="width: 10%;">Subject</th>
                            <th class="border border-gray-400  p-2">Contact</th>
                            <th class="border border-gray-400 p-2">Massage </th>
                            <th class="border border-gray-400 p-2">Date</th>
                        </tr>
                        <?php
                        if ($query->num_rows > 0) {
                            while ($req = mysqli_fetch_assoc($query)) { {
                                    $id  = $req['id'];
                                    $Name = $req['Name'];
                                    $Email = $req['Email'];
                                    $Subject = $req['Subject'];
                                    $Contact = $req['Contact'];
                                    $Massage = $req['Massage'];
                                    $dt = $req['dt'];
                        ?>

                                    <tr class="border border-gray-400">
                                        <td class="border border-gray-400 px-1 text-center"><?php echo  $id  ?></td>
                                        <td class="border border-gray-400 px-1"><?php echo  $Name  ?></td>
                                        <td class="border border-gray-400 px-1"><?php echo  $Email ?></td>
                                        <td class="border border-gray-400 px-1"><?php echo  $Subject ?></td>
                                        <td class="border border-gray-400 px-1"><?php echo $Contact ?></td>
                                        <td class="border border-gray-400 px-1"><?php echo $Massage ?></td>
                                        <td class="border border-gray-400 px-1"><?php echo $dt ?></td>
                                        <!-- <td class="border border-gray-400"><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                        <td class="border border-gray-400"><a href="delete.php?Del=<?php echo $UserID ?>" onclick="return confirm('Are you sure you to delete this')">Delete</a></td> -->
                                    </tr>
                            <?php
                                }
                            }
                        } else {
                            ?>
                            <tr>
                                <td>No member(s) found.......</td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <!-- <table class="w-full">
                    <tbody class=" overflow-hidden text-left">
                        <tr class="border border-gray-400">
                            <th class="border border-gray-400 p-2">Id</th>

                            <th class="border border-gray-400 p-2">Email</th>

                            <th class="border border-gray-400 p-2">Date</th>
                        </tr> -->
                        <?php

                        // while ($req = mysqli_fetch_assoc($subscribers)) {
                        //     $id  = $req['id'];

                        //     $email = $req['email'];

                        //     $created_at = $req['created_at'];
                        ?>

                            <!-- <tr class="border border-gray-400">
                                <td class="border border-gray-400 px-4 py-2"><?php echo  $id  ?></td>

                                <td class="border border-gray-400 px-4 py-2"><?php echo  $email ?></td>

                                <td class="border border-gray-400 px-4 py-2"><?php echo $created_at ?></td>
                                 <td class="border border-gray-400"><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                        <td class="border border-gray-400"><a href="delete.php?Del=<?php echo $UserID ?>" onclick="return confirm('Are you sure you to delete this')">Delete</a></td> -->
                            <!-- </tr> -->
                        <?php
                        // }
                        ?>
                    <!-- </tbody>
                </table> -->
            </div>
        </div>

    </div>

</div>
<div>
    <!-- <h2>welcome<?php echo $_SESSION['Username']; ?></h2> -->

</div>

<?php include("footer.php") ?>