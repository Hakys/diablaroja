<?php

namespace Database\Seeders;

use App\Models\Direccion;
use App\Models\Emisor;
use Illuminate\Database\Seeder;
use App\Models\Facturante;
use App\Models\Proveedor;
use App\Models\TipoFactura;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class FacturanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //COMPRA-VENTAS
        $compraventa = TipoFactura::where('name','C/V')->first();
        $facturantes = [
            [
                "alias" => "Julia Chaparro Rosa",
                "telefono" => "653811711",
                "slug" => Str::slug("653811711"),
                "tipo_factura_id" => $compraventa->id,
            ],[
                "alias" => "Antonio Vigo Lobato",
                "telefono" => "653178954",
                "slug" => Str::slug("653178954"),
                "tipo_factura_id" => $compraventa->id,
            ],

        ];
        foreach($facturantes as $facturante){
            $facturante = Facturante::Create($facturante);
            $direccion = Direccion::factory()->create([
                'full_name' => $facturante->alias,
                'telefono' => $facturante->telefono,
                "direccion" => "Calle Alfonso XIII, 8, Bajo C",
                "cp" => "21002",
                "poblacion" => "Huelva",
                "provincia" => "Huelva",
                "nif" => "",
            ]);
            $facturante->direccions_emisores()->attach([
                $direccion->id => [
                    'created_at' => today(),
                    'updated_at' => today(),
                ],
            ]);
            $facturante->direccions_receptores()->attach([
                $direccion->id => [
                    'created_at' => today(),
                    'updated_at' => today(),
                ],
            ]);
        }

        //COMPRAS
        $facturantes = [
            [
                "alias" => "Dreamlove INT. SL",
                "telefono" => "955630664",
                "email" => "",
                "slug" => Str::slug("955630664"),
                "tipo_factura_id" => TipoFactura::where('name','DL')->first()->id,
                'full_name' => "Dreamlove INT. SL",
                "direccion" => "-",
                "cp" => "41001",
                "poblacion" => "Sevilla",
                "provincia" => "Sevilla",
                "nif" => "",
                "url_home" => "https://store.dreamlove.es/",
                "url_search" => "https://store.dreamlove.es/lp/?idsite=1&idioma=50&criterio=buscador&criterio_id=",
                "url_factura" => "https://store.dreamlove.es/mf-1-50-mis_facturas/",
            ],[
                "alias" => "Lovecherry INT.",
                "telefono" => "966758000",
                "email" => "",
                "slug" => Str::slug("966758000"),
                'full_name' => "Lovecherry INT.",
                "direccion" => "-",
                "cp" => "21002",
                "poblacion" => "Valencia",
                "provincia" => "Valencia",
                "nif" => "",
                "tipo_factura_id" => TipoFactura::where('name','LC')->first()->id,
                "url_home" => "https://www.lovecherry.es/es/",
                "url_search" => "https://www.lovecherry.es/es/#/dfclassic/query_name=match_and&query=",
                "url_factura" => "https://www.lovecherry.es/es/module/customerattachment/default",
            ],[
                "alias" => "Grutinet SL",
                "telefono" => "960707532",
                "email" => "",
                "slug" => Str::slug("960707532"),
                'full_name' => "Grutinet SL",
                "direccion" => "-",
                "cp" => "21002",
                "poblacion" => "Murcia",
                "provincia" => "Murcia",
                "nif" => "",
                "tipo_factura_id" => TipoFactura::where('name','GRU')->first()->id,
                "url_home" => "https://www.grutinetpro.com/tienda.asp",
                "url_search" => "https://www.grutinetpro.com/catalogo.asp?busc=",
                "url_factura" => "https://www.grutinetpro.com/micuenta/facturas.asp",
            ],[
                "alias" => "Diabla Roja - Almacén",
                "telefono" => "684100170",
                "email" => "",
                "slug" => Str::slug("684100170"),
                "tipo_factura_id" => TipoFactura::where('name','DR')->first()->id,
                'full_name' => "Diabla Roja - Almacén",
                "direccion" => "Huelva",
                "cp" => "21002",
                "poblacion" => "Huelva",
                "provincia" => "Huelva",
                "nif" => "48933206Q",
                "url_home" => "https://diablaroja.es/",
                "url_search" => "https://https://diablaroja.es/busqueda?controller=search&s=",
                "url_factura" => "https://diablaroja.es/admin123/index.php?controller=AdminOrders&token=2a5f042e52f8ad36a5bd54774ee53728",
            ],
            [
                "alias" => "Paudiet Productos Naturales SL",
                "telefono" => "961149203",
                "email" => "pedidos@paudiet.com",
                "slug" => Str::slug("961149203"),
                "tipo_factura_id" => TipoFactura::where('name','PROV')->first()->id,
                'full_name' => "Paudiet Productos Naturales SL",
                "direccion" => "poligono cotes b, calle traginers, 31",
                "cp" => "46680",
                "poblacion" => "Algemesi",
                "provincia" => "Valencia",
                "nif" => "B98514250",
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "CYDE SL Shunga Mayorista",
                "telefono" => "952335692",
                "email" => "shungamayorista@gmail.com",
                "slug" => Str::slug("952335692"),
                "tipo_factura_id" => TipoFactura::where('name','PROV')->first()->id,
                'full_name' => "CYDE SL Shunga Mayorista",
                "direccion" => "Calle Mendivil, 8",
                "cp" => "29002",
                "poblacion" => "Málaga",
                "provincia" => "Málaga",
                "nif" => "B92512367",
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "Bystart LDA",
                "telefono" => "911161571",
                "email" => "",
                "slug" => Str::slug("911161571"),
                "tipo_factura_id" => TipoFactura::where('name','PROV')->first()->id,
                'full_name' => "Bystart LDA",
                "direccion" => "avenida da republica, 1",
                "cp" => "4730251",
                "poblacion" => "lage",
                "provincia" => "vila verde",
                "pais" => "Portugal",
                "nif" => "PT510136109",
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "NUEI TESIEN ASS slu",
                "telefono" => "",
                "email" => "",
                "slug" => Str::slug(""),
                "tipo_factura_id" => TipoFactura::where('name','PROV')->first()->id,
                'full_name' => "NUEI TESIEN ASS slu",
                "direccion" => "c/ Vilabella, 5",
                "cp" => "08500",
                "poblacion" => "Vic",
                "provincia" => "Barcelona",
                "nif" => "B66090788",
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "EROSPARTNER",
                "telefono" => "+3102288200",
                "email" => "info@erospartner.com",
                "slug" => Str::slug("+3102288200"),
                "tipo_factura_id" => TipoFactura::where('name','PROV')->first()->id,
                'full_name' => "EROSPARTNER",
                "direccion" => "Tomatenmarkt, 1 (1681 PH)",
                "cp" => "",
                "poblacion" => "Zwaagdijk",
                "provincia" => "",
                "pais" => "The Netherlands",
                "nif" => "",
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "Saint Sual SLU",
                "telefono" => "917420313",
                "email" => "general@saintsual.com",
                "slug" => Str::slug("917420313"),
                "tipo_factura_id" => TipoFactura::where('name','PROV')->first()->id,
                'full_name' => "Saint Sual SLU",
                "direccion" => "c/ecuador, 12",
                "cp" => "28850",
                "poblacion" => "torrejon de ardoz",
                "provincia" => "Madrid",
                "nif" => "B75018119",
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "R.E. Autónomos",
                "telefono" => "1",
                "email" => "",
                "slug" => Str::slug("1"),
                "tipo_factura_id" => TipoFactura::where('name','GAS')->first()->id,
                'full_name' => "R.E. Autónomos",
                "direccion" => "",
                "cp" => "",
                "poblacion" => "",
                "provincia" => "",
                "nif" => "",
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "Caixabank SA",
                "telefono" => "2",
                "email" => "",
                "slug" => Str::slug("2"),
                "tipo_factura_id" => TipoFactura::where('name','GAS')->first()->id,
                'full_name' => "Caixabank SA",
                "direccion" => "",
                "cp" => "",
                "poblacion" => "",
                "provincia" => "",
                "nif" => "",
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "Permasan",
                "telefono" => "3",
                "email" => "",
                "slug" => Str::slug("3"),
                "tipo_factura_id" => TipoFactura::where('name','GAS')->first()->id,
                'full_name' => "Permasan, Josefa Perez Castillo",
                "direccion" => "",
                "cp" => "",
                "poblacion" => "",
                "provincia" => "",
                "nif" => "29759859K",
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
        ];
        foreach ($facturantes as $facturante) {
            $f = Facturante::Create([
                "alias" => $facturante['alias'],
                "telefono" => $facturante['telefono'],
                "slug" => $facturante['slug'],
                "tipo_factura_id" =>$facturante['tipo_factura_id'],
            ]);
            $d = Direccion::Create([
                'full_name' => $facturante['full_name'],
                'telefono' => $facturante['telefono'],
                "direccion" => $facturante['direccion'],
                "cp" => $facturante['cp'],
                "poblacion" => $facturante['poblacion'],
                "provincia" => $facturante['provincia'],
                "nif" => $facturante['nif'],
            ]);
            $f->direccions_emisores()->attach([
                $d->id => [
                    'created_at' => today(),
                    'updated_at' => today(),
                ],
            ]);
            $e = Emisor::where('facturante_id',$f->id)
                ->where('direccion_id',$d->id)->first();

            Proveedor::Create([
                "url_home" => $facturante['url_home'],
                "url_search" => $facturante['url_search'],
                "url_factura" => $facturante['url_factura'],
                'emisor_id' => $e->id,
            ]);
        }


        //COMPRAS - PROV
        Facturante::factory(5)->create(["tipo_factura_id" => TipoFactura::where('name','PROV')->first()]);

        //GASTOS
        Facturante::factory(15)->create(["tipo_factura_id" => TipoFactura::where('name','GAS')->first()]);
        Facturante::factory(15)->create(["tipo_factura_id" => TipoFactura::where('name','N/D')->first()]);

        //VENTAS
        Facturante::factory(90)->create();
    }
}