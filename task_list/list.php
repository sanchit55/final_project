<?php
  include '../header.php';
  ?>
  </div>
   <h3><strong>Task To Complete</strong></h3>
    <table>
       <tr>
      <th style="text-align: center;">Task</th>
      <th style="text-align: center;">Description</th>
      <th style="text-align: center;">Date</th>
      <th style="text-align: center;">Time</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      </tr>
        <?php foreach($result as $res):?>
      <tr>
        <td style="text-align: center;"> <?php echo $res['todo_title']; ?> </td>
  <td style="text-align: center;"> <?php echo $res['description']; ?> </td>
        <td style="text-align: center;"> <?php echo $res['date']; ?>  </td>
  <td style="text-align: center;"> <?php echo $res['date']; ?> </td>

  <td><form style="margin-top: 15px;" action="index.php" method="post">
            <input type="hidden" name="user_id" value="<?php echo $res['id']; ?>">
      <input style="text-align: center; font-family: cursive;" type="submit" value="Delete">
      <input type="hidden" name='action' value="deletetask">
            </form>
        </td>
  <td><form style="margin-top: 15px;" action="index.php" method="post">
      <input type="hidden" name="user_id" value="<?php echo $res['id']; ?>">
      <input type="submit" style="text-align: center; font-family: cursive;" value="Update Status">
      <input type="hidden" name='action' value="statusupdate">
      </form>
        </td>
        <td>
     <form style="margin-top: 15px;" action="index.php" method= "post">
     <input type="hidden" name= "user_id" value="<?php echo $res['id']; ?>">
     <input type="submit" style="text-align: center;font-family: cursive; " value = "Edit">
     <input type="hidden" name='action' value="edittask">
     </form>
  </td>
</tr>  

<?php endforeach;?>
    </table>
      <form style="margin-top:10px;" method = 'post' action='addtask.php'>
   <br> <input type="submit" style="font-family: cursive;" value="Add Task"/>
    </form>
 <h3><strong>Completed Task</strong></h3>
    <table>
           <tr>
     <th style="text-align: center;">Task</th>
     <th style="text-align: center;">Description</th>
     <th style="text-align: center;">Date</th>
     <th style="text-align: center;">Time</th>
     <th>&nbsp;</th>
     </tr>
     <?php foreach($result2 as $res2):?>
     <tr>
     <td style="text-align: center;"> <?php echo $res2['todo_title']; ?>  </td>
     <td style="text-align: center;"> <?php echo $res2['description']; ?>  </td>
     <td style="text-align: center;"> <?php echo $res2['date_created']; ?>  </td>
           <td style="text-align: center;"> <?php echo $res2['date']; ?>  </td>
           <td><form style="margin-top: 15px;" action="index.php" method="post">
               <input type="hidden" name="user_id" value="<?php echo $res2['user_id']; ?>">
               <input type="submit" style="font-family: cursive;" value="Delete">
         <input type="hidden" name='action' value="deletetask">
         </form>
    </td>
          </tr>                                                          <?php endforeach;?>
    </table>

  </body>
</html>
<?php
include('../view/footer.php');
?>