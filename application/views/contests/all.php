<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Shirt Design Contest</th>
      <th>Contest Name</th>
      <th>Prize</th>
      <th>Entries</th>
      <th>Time Left</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach($contests->result_array() as $record) :  ?>
         <tr>
            <td><?php echo $record['contest_id']; ?></td>
            <td><?php echo $record['title']; ?></td>
            <td><?php echo $record['prize']; ?></td>
            <td><?php /** no of entries  **/ ?></td>
            <td><?php /** computations for remaining days**/ ?></td>
         </tr>
     <?php endforeach ?>
    </tbody>
   </table>
