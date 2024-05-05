<table border="1" width="800">
    <?php $i=1; ?>
    <?php echo $a; ?>

    <thead>
    <tr>
        <th>SL NO</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product){?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $product['name']; ?></td>
        <td><?php echo $product['price']['regular_price']; ?></td>
        <td><?php echo $product['description']; ?></td>
        <td><?php echo $product['image']; ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>