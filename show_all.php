<?php
    include "head_nav.php";

$showall_sql="SELECT *
FROM `91879_book_reviews`
ORDER BY `91879_book_reviews`.`Title` ASC";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);

?>
        <div class="box main">
            <h2>All Items</h2>
            
            <?php
            
            // check if there are any results
            
            if ($count<1)
                
            {
                
            ?>
            
            <div class="error">
                Sorry! There are no results that match your search.
                Please use the search box in the sidebar to try again.
                 
            </div>
            
            <?php
                
            } // end count 'if'
            
            // if there are not results, output an error
            else {
                
                do {
                    
                ?>
            
                        <div class="results">
            
            <p>Title: <span class="sub_heading"><?php echo 
            $showall_rs['Title']; ?></span></p>
            
            <p>Author: <span class="sub_heading"><span class="sub_heading"><?php echo 
            $showall_rs['Author']; ?></span></span>
                </p>
            
            <p>Genre: <span class="sub_heading"><?php echo $showall_rs['Genre']; ?></span>
                </p>
            
            <p>Rating: <span class="sub_heading"><?php echo $showall_rs['Rating']; ?></span>
                </p>
            
            <p><span class="sub_heading">Review / Response</span></p>
            
            <p>
                Review : <span class="sub_heading"><?php echo 
            $showall_rs['Review']; ?></span>
                
            </p>
            
            <?php
                    
              } // end of 'do'
                
              while($showall_rs=mysqli_fetch_assoc($showall_query));
                
            } // and else
            
            // if there are results, display them
            
            ?>
            
            
        </div>    <!-- / main -->
        



<?php
    include "bottombit.php";
?>