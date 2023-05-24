
<?php

    // SQL FOR CUSTOMIZATION


    function getCategory($category_id, $conn) {
        $sql = "SELECT * FROM z_category WHERE category_id = $category_id";
        $result = mysqli_query($conn, $sql);

        $category = null;

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $category = array(
                'category_id' => $row['category_id'],
                'item_category' => $row['item_category'],
                'category_photo' => $row['category_photo']
            );
        
        return $category;

        } else {
            return null;
        }
    }

    function getShape($shape_id, $conn) {
        $sql = "SELECT * FROM z_shape WHERE shape_id = '$shape_id'";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
    
            $shape = array(
                'shape_id' => $row['shape_id'],
                'cake_shape' => $row['cake_shape'],
                'shape_photo' => $row['shape_photo'],
                'shape_price' => $row['shape_price']
            );
    
        return $shape;

        } else {
            return null;
        }
    }

    function getSize($cake_size_id, $conn) {
        $sql = "SELECT * FROM z_size WHERE cake_size_id = '$cake_size_id'";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
    
            $cake_size = array(
                'cake_size_id' => $row['cake_size_id'],
                'cake_size' => $row['cake_size'],
                'size_price' => $row['size_price']
            );
    
            return $cake_size;
        } else {
            return null;
        }
    }
    
    function getFlavor($flavor_id, $conn) {
        $sql = "SELECT * FROM z_flavor WHERE flavor_id = '$flavor_id'";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
    
            $cake_flavor = array(
                'flavor_id' => $row['flavor_id'],
                'cake_flavor' => $row['cake_flavor'],
                'flavor_img' => $row['flavor_img'],
                'flavor_price' => $row['flavor_price']
            );
    
            return $cake_flavor;
        } else {
            return null;
        }
    }
    
    function getFrosting($frosting_id, $conn) {
        $sql = "SELECT * FROM z_frosting WHERE frosting_id = '$frosting_id'";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
    
            $cake_frosting = array(
                'frosting_id' => $row['frosting_id'],
                'cake_frosting' => $row['cake_frosting'],
                'frosting_img' => $row['frosting_img'],
                'frosting_price' => $row['frosting_price']
            );
    
            return $cake_frosting;
        } else {
            return null;
        }
    }    

?>

