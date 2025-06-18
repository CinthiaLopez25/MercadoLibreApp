<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

class RealDataSeeder extends Seeder
{
    public function run(): void
    {
        // Crear categorías
        $categoryNames = [
            'Tecnología', 'Hogar', 'Deportes', 'Moda', 'Juguetes',
            'Salud', 'Belleza', 'Automotriz', 'Electrodomésticos', 'Oficina'
        ];

        $categories = [];
        foreach ($categoryNames as $name) {
            $categories[$name] = Category::create(['name' => $name]);
        }

        // Lista de productos con imagenes reales
        $products = [
            ['Laptop Lenovo ThinkPad X1 Carbon', 'Portátil ultraligero con Intel Core i7 y 16GB RAM.', 24999.99, 'Tecnología', true, 'https://m.media-amazon.com/images/I/61R72QAFOvL._AC_SL1391_.jpg'],
            ['Smartphone Samsung Galaxy S21', 'Teléfono con pantalla AMOLED y cámara de 64MP.', 15999.50, 'Tecnología', true, 'https://m.media-amazon.com/images/I/61XyNdmvr6L._UF894,1000_QL80_.jpg'],
            ['Aspiradora Xiaomi Mi G10', 'Aspiradora inalámbrica potente con batería de larga duración.', 3999.00, 'Hogar', true, 'https://m.media-amazon.com/images/I/41L7+yifGWL.jpg'],
            ['Refrigerador LG 14 pies', 'Refrigerador No Frost con eficiencia energética A++.', 8999.99, 'Electrodomésticos', false, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgl_E0MnuI_sGuLBX136kbtzq3YYgH54915A&s'],
            ['Bicicleta de montaña R29', 'Cuadro de aluminio, suspensión delantera, frenos hidráulicos.', 7500.00, 'Deportes', false, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1N1-qSsiLUQigoIRFXjnMjWhczGmBuiGhMQ&s'],
            ['Camiseta Nike Dri-FIT', 'Camiseta deportiva para entrenamiento con tela transpirable.', 799.99, 'Moda', true, 'https://dpjye2wk9gi5z.cloudfront.net/wcsstore/ExtendedSitesCatalogAssetStore/images/catalog/zoom/3017813-0301V1.jpg'],
            ['Muñeca Barbie Princesa', 'Muñeca coleccionable con vestido elegante.', 399.99, 'Juguetes', false, 'https://m.media-amazon.com/images/I/819RND1WsTL.jpg'],
            ['Set de maquillaje Maybelline', 'Kit completo con sombras, labiales y rubores.', 1200.00, 'Belleza', true, 'https://i5-mx.walmartimages.com/gr/images/product-images/img_large/00750955294057L.jpg?odnHeight=612&odnWidth=612&odnBg=FFFFFF'],
            ['Monitor LG 27 pulgadas 4K', 'Pantalla ultra HD con soporte ajustable.', 5999.00, 'Tecnología', false, 'https://www.lg.com/content/dam/channel/wcms/mx/images/monitores/27us500-w/gallery/gallery/ultrafine-27us500-gallery-01-2010.jpg/_jcr_content/renditions/thum-1600x1062.jpeg'],
            ['Silla ergonómica para oficina', 'Silla con soporte lumbar y ajuste de altura.', 3299.50, 'Oficina', true, 'https://toplivingmexico.com/cdn/shop/products/10066940007057-1.jpg?v=1748048967&width=1080'],
            ['Cámara Canon EOS M50', 'Cámara mirrorless con lente 15-45mm.', 9999.00, 'Tecnología', true, 'https://mx.static.webuy.com/product_images/Electronica/Camaras%20-%20Digitales/SDIGCANM50M21545B_l.jpg'],
            ['Tablet Samsung Galaxy Tab S7', 'Pantalla de 11" y S Pen incluido.', 11999.00, 'Tecnología', true, 'https://m.media-amazon.com/images/I/610Bn3iYSzL.jpg'],
            ['Colchón memory foam matrimonial', 'Colchón ortopédico con enfriamiento.', 8999.99, 'Hogar', false, 'https://m.media-amazon.com/images/I/71O61NIe4wL._UF894,1000_QL80_.jpg'],
            ['Licuadora Oster 10 velocidades', 'Vaso de vidrio resistente.', 1499.00, 'Hogar', true, 'https://ss625.liverpool.com.mx/xl/1099339060.jpg'],
            ['Balón de fútbol profesional', 'Con cámara de butilo y costuras reforzadas.', 799.99, 'Deportes', false, 'https://voit.vtexassets.com/arquivos/ids/166174/84435_01.jpg?v=638712747490270000'],
            ['Zapatos Adidas Running', 'Calzado con amortiguación Boost.', 1599.00, 'Moda', true, 'https://assets.adidas.com/images/w_600,f_auto,q_auto/86c988db99e2450bb7cec16dea8aa1c7_9366/Tenis_de_Running_Switch_Move_Negro_ID5253_01_standard.jpg'],
            ['Peluche gigante oso panda', 'De 1.2 metros, muy suave.', 1299.00, 'Juguetes', false, 'https://ae01.alicdn.com/kf/Hd72354a3a28c428e9e44bbabbb3ad03ei/New-Large-Size-Teddy-Bear-Plush-Toy-Lovely-Giant-Panda-Huge-Stuffed-Soft-Dolls-Birthday-Gift.jpg'],
            ['Perfume Chanel No. 5', 'Fragancia clásica floral-amaderada.', 2499.00, 'Belleza', true, 'https://abscents.com.mx/cdn/shop/files/41tEJylR89L-fotor-20240521125022.jpg?v=1716317429'],
            ['Impresora HP Multifuncional', 'Con escáner y WiFi.', 2699.00, 'Oficina', true, 'https://ofixmx.vtexassets.com/arquivos/ids/201571-800-450?v=638417618143400000&width=800&height=450&aspect=true'],
            ['Escritorio madera nogal', 'Amplio y elegante.', 4299.00, 'Oficina', false, 'https://m.media-amazon.com/images/I/61iohqERpfL.jpg'],
            ['Smartwatch Apple Watch S6', 'Monitor ECG y oxígeno.', 8499.99, 'Tecnología', true, 'https://m.media-amazon.com/images/I/71K+hTswAyL._UF894,1000_QL80_.jpg'],
            // ... Agrega los demás productos siguiendo este mismo formato
        ];

        // Insertar productos
        $insertData = [];
        foreach ($products as $p) {
            [$name, $desc, $price, $catName, $freeShipping, $image] = $p;

            $insertData[] = [
                'id_category' => $categories[$catName]->id,
                'name' => $name,
                'url' => Str::slug($name),
                'description' => $desc,
                'price' => $price,
                'stock' => rand(5, 50),
                'image_url' => $image,
                'free_shipping' => $freeShipping,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        Product::insert($insertData);
    }
}
