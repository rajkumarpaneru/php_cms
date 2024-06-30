<div class="pagination">
  <?php
    if((int)$current_page > 1){
      echo '<a href="' . url_for('/staff/subjects/index.php?perPage=10&pageNo=' . ((int)$current_page - 1)) . '">&laquo;</a>';
    } else {
      echo '<a href="">&laquo;</a>';
    }

  ?>
  <a href="#">1</a>
  <a href="#" class="active">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <?php
    if((int)$current_page < $total_pages){
      echo '<a href="' . url_for('/staff/subjects/index.php?perPage=10&pageNo=' . ((int)$current_page + 1)) . '">&raquo;</a>';
    } else {
      echo '<a href="">&raquo;</a>';
    }

  ?>
</div>