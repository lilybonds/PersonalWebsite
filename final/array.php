<!-- PRODUCTS PAGE -->
<?php include 'top.php'; ?>
    <main>
        <h1>Products</h1>
        <section>
            <h3>Our most popular products!</h3>
            <table>
                <tr>
                    <th>Bikes</th>
                    <th>Price</th>
                </tr>
                <?php
                $sql = 'SELECT fldImageName, fldProductName, fldPrice FROM tblProducts';
                $statement = $pdo->prepare($sql);
                $statement->execute();

                $products = $statement->fetchAll();
                $index = 0;

                foreach ($products as $product) {
                    if ($index == 3) {
                        print '<tr>';
                        print '<th>Accesories</th>';
                        print '<th>Price</th>';
                        print '</tr>' . PHP_EOL;
                    }

                    print '<tr>';
                    print '<td>';
                    print '<figure class="roundedCorners">';
                    print '<img src="images/' . $product['fldImageName'] . '" alt="' . $product['fldProductName'] . '" class="roundedCorners">';
                    print '<figcaption>' . $product['fldProductName'] . '</figcaption>';
                    print '</figure>';
                    print '</td>';
                    print '<td>' . $product['fldPrice'] . '</td>';
                    print '</tr>' . PHP_EOL;
                    $index++;
                }
                ?>
            </table>
        </section>
        <section>
            <h2>Image Sources</h2>
            <ol>
                <li><a href="https://www.statebicycle.com/products/6061-ebike-commuter-matte-black" target="_blank">6061 Bike</a></li>
                <li><a href="https://www.prioritybicycles.com/products/the600" target="_blank">600 Bike</a></li>
                <li><a href="https://www.homedepot.com/p/24-in-Steel-Mountain-Bike-with-21-Speed-in-Green-for-Teenagers-jinxBike21/325009765" target="_blank">24 in Bike</a></li>
                <li><a href="https://www.amazon.com/WILD-MAN-Waterproof-Mountain-Accessories/dp/B0B2NR3MJT?th=1" target="_blank">Bike Bag</a></li>
                <li><a href="https://www.rei.com/product/126200/kryptonite-new-u-kryptolok-standard-u-lock-with-cable?cm_mmc=aff_AL-_-192437-_-243845-_-NA&avad=243845_a396f5a99" target="_blank">Lock</a></li>
                <li><a href="https://www.rei.com/product/173247/giro-agilis-mips-bike-helmet?cm_mmc=aff_AL-_-192437-_-243845-_-NA&avad=243845_e397117bd" target="_blank">Helmet</a></li>
            </ol>
        </section>
    </main>
    <?php include 'footer.php'; ?>