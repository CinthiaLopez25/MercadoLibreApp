<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

class DataSeeder extends Seeder
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
            ['Auriculares Sony WH-1000XM5', 'Cancelación activa de ruido, Bluetooth 5.2.', 6999.00, 'Tecnología', true, 'https://m.media-amazon.com/images/I/71o8Q5XJS5L._AC_SL1500_.jpg'],
            //Mas productos
            ['Cafetera Nespresso Essenza Mini', 'Diseño compacto y elegante para café espresso.', 2999.00, 'Hogar', true, 'https://http2.mlstatic.com/D_Q_NP_834030-MLA50910828733_072022-O.webp'],
            ['Reloj Casio G-Shock', 'Resistente al agua y golpes, diseño deportivo.', 3499.00, 'Moda', false, 'https://dpjye2wk9gi5z.cloudfront.net/wcsstore/ExtendedSitesCatalogAssetStore/images/catalog/zoom/4017858-0808V1.jpg'],
            ['Set LEGO Star Wars', 'Nave espacial con más de 700 piezas.', 2499.00, 'Juguetes', true, 'https://i5-mx.walmartimages.com/mg/gm/1p/images/product-images/img_large/00067341937691-2l.jpg?odnHeight=612&odnWidth=612&odnBg=FFFFFF&format=avif'],
            ['Secadora de cabello Revlon', 'Tecnología iónica, múltiples temperaturas.', 899.00, 'Belleza', true, 'https://m.media-amazon.com/images/I/619Mu2NY1mL.jpg'],
            ['Báscula digital Xiaomi', 'Medición corporal completa con app.', 499.00, 'Salud', true, 'https://http2.mlstatic.com/D_NQ_NP_699292-MLA40997962193_032020-O.webp'],
            ['Lámpara LED de escritorio', 'Luz blanca graduable, diseño minimalista.', 699.00, 'Oficina', true, 'https://www.lamparaya.com.mx/cdn/shop/files/7_252Fc_252Fc_252F5_252F7cc5b9743c846a2f194f4c9500e5cc826401d06b_e_252F3_252Fa_252Fb_252Fe3ab604c341ecd351150046aa18f98102e85c65c_b_252Ff_252F0_252Fe_252Fbf0e50_700x700.jpg?v=1738004283'],
            ['Plancha Oster Vapor', 'Antiadherente con rociador y vapor vertical.', 899.00, 'Electrodomésticos', true, 'https://ostermx.vtexassets.com/arquivos/ids/163885/GCSTBS3803-1.jpg?v=638820763130900000'],
            ['Bicicleta fija para spinning', 'Ideal para entrenamiento en casa.', 5999.00, 'Deportes', false, 'https://ss206.liverpool.com.mx/xl/1094788044.jpg'],
            ['Smart TV Samsung 55"', '4K UHD con Tizen y asistentes integrados.', 13999.00, 'Tecnología', true, 'https://m.media-amazon.com/images/I/81BfH-7scqL.jpg'],
            ['Sartén antiadherente T-fal', 'Distribución uniforme de calor.', 599.00, 'Hogar', true, 'https://http2.mlstatic.com/D_NQ_NP_731626-MLU72032951894_102023-O.webp'],
            ['Batería portátil Anker 20,000mAh', 'Carga rápida USB-C y dual output.', 1299.00, 'Tecnología', true, 'https://ss637.liverpool.com.mx/xl/1165912337.jpg'],
            ['Lentes Ray-Ban Aviator', 'Diseño clásico con protección UV.', 3499.00, 'Moda', false, 'https://dpjye2wk9gi5z.cloudfront.net/wcsstore/ExtendedSitesCatalogAssetStore/images/catalog/zoom/4006861-0013V1.jpg'],
            ['Triciclo infantil Fisher-Price', 'Triciclo seguro con asiento ajustable.', 1599.00, 'Juguetes', true, 'https://m.media-amazon.com/images/I/71Xq6DM5TAL.jpg'],
            ['Set brochas maquillaje', '16 piezas profesionales de fibra suave.', 699.00, 'Belleza', true, 'https://www.accesoriosmexicali.com/cdn/shop/products/ScreenShot2020-07-18at8.49.29PM.png?v=1595130735'],
            ['Oxímetro de pulso', 'Medición de SpO2 y ritmo cardíaco.', 399.00, 'Salud', true, 'https://i5.walmartimages.com/asr/5b69acd7-e69d-43dd-9458-549915635b95.dc8208a2798dc5e316f35963d934c57b.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF'],
            ['Silla gamer ergonómica', 'Diseño reclinable con soporte lumbar.', 4599.00, 'Oficina', false, 'https://m.media-amazon.com/images/I/71Z03VRBWlL.jpg'],
            ['Freidora de aire Ninja', 'Capacidad de 4 litros, sin aceite.', 2899.00, 'Electrodomésticos', true, 'https://ss625.liverpool.com.mx/xl/1153652666.jpg'],
            ['Kit de mancuernas ajustables', '20 kg totales con maletín.', 1499.00, 'Deportes', false, 'https://i5.walmartimages.com/asr/9a7f80ee-1ffc-4578-a758-f81af8ea4676.4ac7db47a1bb558c2d9f2d9500da48c4.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF'],
            ['Chromebook HP 14"', 'Ideal para navegación y estudio.', 7499.00, 'Tecnología', true, 'https://m.media-amazon.com/images/I/91shKLxoedL.jpg'],
            ['Toallas de baño algodón 2pzas', 'Suaves y absorbentes.', 599.00, 'Hogar', true, 'https://elektra.vtexassets.com/arquivos/ids/12170495-800-450?v=638798855244000000&width=800&height=450&aspect=true'],
            ['Cargador inalámbrico Samsung', 'Carga rápida para Galaxy y otros.', 799.00, 'Tecnología', true, 'https://images.samsung.com/is/image/samsung/es-wireless-charger-pad-pn920-galaxy-note-5-ep-pn920bbegww-001-black-black?$684_547_JPG$'],
            ['Blusa Zara mujer', 'Corte clásico con tela fresca.', 599.00, 'Moda', true, 'https://static.zara.net/assets/public/0fcc/ee82/f64a48b9b81b/bbe7c6c05794/04786063681-e1/04786063681-e1.jpg?ts=1738672057285'],
            ['Auto a control remoto', 'Alta velocidad con batería recargable.', 1199.00, 'Juguetes', false, 'https://resources.sanborns.com.mx/imagenes-sanborns-ii/1200/4895181837080.jpg'],
            ['Set cuidado facial Neutrogena', 'Limpiador, hidratante y protector.', 799.00, 'Belleza', true, 'https://m.media-amazon.com/images/I/61PZv-XVFuL._UF1000,1000_QL80_.jpg'],
            ['Termómetro infrarrojo Steren', 'Medición sin contacto.', 699.00, 'Salud', true, 'https://www.steren.com.mx/media/catalog/product/cache/0236bbabe616ddcff749ccbc14f38bf2/image/223306df7/termometro-industrial-infrarrojo-tipo-pistola.jpg'],
            ['Archivador 4 cajones', 'Metálico para oficina o hogar.', 3299.00, 'Oficina', false, 'https://m.media-amazon.com/images/I/61hKS3JwBaL.jpg'],
            ['Horno tostador BLACK+DECKER', 'Compacto para cocina pequeña.', 1299.00, 'Electrodomésticos', true, 'https://ss625.liverpool.com.mx/xl/1100169050.jpg'],
            ['Banda de resistencia fitness', 'Pack de 5 niveles.', 499.00, 'Deportes', true, 'https://i0.wp.com/atomfitness.com.mx/wp-content/uploads/2024/05/Bandas-1-1-scaled.jpg?fit=2560%2C2560&ssl=1'],
            ['Laptop Acer Aspire 5', 'Ryzen 5, 8GB RAM, SSD 256GB.', 10999.00, 'Tecnología', true, 'https://m.media-amazon.com/images/I/71rvYWl5fuL.jpg'],
            ['Cámara de seguridad TP-Link', 'WiFi, visión nocturna, app móvil.', 999.00, 'Tecnología', true, 'https://m.media-amazon.com/images/I/619huP8pU6L.jpg'],
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
