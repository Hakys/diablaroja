<?php

namespace Database\Seeders;

use App\Models\Contacto;
use App\Models\Tipo;

use App\Models\Direccion;
use Illuminate\Database\Seeder;
use App\Models\Facturante;
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
        //CCV
        $contactos = [
            [
                "alias" => "Julia Chaparro Rosa",
                "telefono" => "653811711",
                "slug" => Str::slug("653811711"),
                "nif" => "74933144H"
            ],[
                "alias" => "Antonio Vigo Lobato",
                "telefono" => "653178954",
                "slug" => Str::slug("653178954"),
                "nif" => "48933206Q"
            ],

        ];
        $tipos = Tipo::whereIn('name',['Comprador','Consumidor','Vendedor'])->get();
        foreach($contactos as $c){
            $contacto = Contacto::Create($c);
            foreach ($tipos as $tipo) {
                $direccion = Direccion::Create([
                    'full_name' => $c['alias'],
                    'telefono' => $c['telefono'],
                    "direccion" => "Calle Alfonso XIII, 8, Bajo C",
                    "cp" => "21002",
                    "poblacion" => "Huelva",
                    "provincia" => "Huelva",
                    "nif" => $c['nif'],
                    "contacto_id" => $contacto->id,
                    'tipo_id'=> $tipo->id,
                ]);
            }
        }

        //COMPRAS
        $facturantes = [
            [
                "alias" => "Dreamlove INT. SL",
                "telefono" => "955630664",                
                "email" => "",
                'full_name' => "Dreamlove INT. SL",
                "direccion" => "-",
                "cp" => "41001",
                "poblacion" => "Sevilla",
                "provincia" => "Sevilla",
                "nif" => "",
                "tipo_id" => Tipo::where('name','DL')->first()->id,
                "url_home" => "https://store.dreamlove.es/",
                "url_search" => "https://store.dreamlove.es/lp/?idsite=1&idioma=50&criterio=buscador&criterio_id=",
                "url_factura" => "https://store.dreamlove.es/mf-1-50-mis_facturas/",
            ],[
                "alias" => "Lovecherry INT.",
                "telefono" => "966758000",
                "email" => "",
                'full_name' => "Lovecherry INT.",
                "direccion" => "-",
                "cp" => "21002",
                "poblacion" => "Valencia",
                "provincia" => "Valencia",
                "nif" => "",
                "tipo_id" => Tipo::where('name','LC')->first()->id,
                "url_home" => "https://www.lovecherry.es/es/",
                "url_search" => "https://www.lovecherry.es/es/#/dfclassic/query_name=match_and&query=",
                "url_factura" => "https://www.lovecherry.es/es/module/customerattachment/default",
            ],[
                "alias" => "Grutinet SL",
                "telefono" => "960707532",
                "email" => "",
                'full_name' => "Grutinet SL",
                "direccion" => "-",
                "cp" => "21002",
                "poblacion" => "Murcia",
                "provincia" => "Murcia",
                "nif" => "",
                "tipo_id" => Tipo::where('name','GRU')->first()->id,
                "url_home" => "https://www.grutinetpro.com/tienda.asp",
                "url_search" => "https://www.grutinetpro.com/catalogo.asp?busc=",
                "url_factura" => "https://www.grutinetpro.com/micuenta/facturas.asp",
            ],[
                "alias" => "Diabla Roja - Almacén",
                "telefono" => "684100170",
                "email" => "",
                'full_name' => "Diabla Roja - Almacén",
                "direccion" => "Huelva",
                "cp" => "21002",
                "poblacion" => "Huelva",
                "provincia" => "Huelva",
                "nif" => "48933206Q",
                "tipo_id" => Tipo::where('name','DR')->first()->id,
                "url_home" => "https://diablaroja.es/",
                "url_search" => "https://https://diablaroja.es/busqueda?controller=search&s=",
                "url_factura" => "https://diablaroja.es/admin123/index.php?controller=AdminOrders&token=2a5f042e52f8ad36a5bd54774ee53728",
            ],
            [
                "alias" => "Paudiet Productos Naturales SL",
                "telefono" => "961149203",
                "email" => "pedidos@paudiet.com",

                'full_name' => "Paudiet Productos Naturales SL",
                "direccion" => "poligono cotes b, calle traginers, 31",
                "cp" => "46680",
                "poblacion" => "Algemesi",
                "provincia" => "Valencia",
                "nif" => "B98514250",
                "tipo_id" => Tipo::where('name','PROV')->first()->id,
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "CYDE SL Shunga Mayorista",
                "telefono" => "952335692",
                "email" => "shungamayorista@gmail.com",                
                'full_name' => "CYDE SL Shunga Mayorista",
                "direccion" => "Calle Mendivil, 8",
                "cp" => "29002",
                "poblacion" => "Málaga",
                "provincia" => "Málaga",
                "nif" => "B92512367",
                "tipo_id" => Tipo::where('name','PROV')->first()->id,
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "Bystart LDA",
                "telefono" => "911161571",
                "email" => "",                
                'full_name' => "Bystart LDA",
                "direccion" => "avenida da republica, 1",
                "cp" => "4730251",
                "poblacion" => "lage",
                "provincia" => "vila verde",
                "pais" => "Portugal",
                "nif" => "PT510136109",
                "tipo_id" => Tipo::where('name','PROV')->first()->id,
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "NUEI TESIEN ASS slu",
                "telefono" => "333333333",
                "email" => "",                
                'full_name' => "NUEI TESIEN ASS slu",
                "direccion" => "c/ Vilabella, 5",
                "cp" => "08500",
                "poblacion" => "Vic",
                "provincia" => "Barcelona",
                "nif" => "B66090788",
                "tipo_id" => Tipo::where('name','PROV')->first()->id,
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "EROSPARTNER",
                "telefono" => "+3102288200",
                "email" => "info@erospartner.com",                
                'full_name' => "EROSPARTNER",
                "direccion" => "Tomatenmarkt, 1 (1681 PH)",
                "cp" => "",
                "poblacion" => "Zwaagdijk",
                "provincia" => "",
                "pais" => "The Netherlands",
                "nif" => "",
                "tipo_id" => Tipo::where('name','PROV')->first()->id,
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "Saint Sual SLU",
                "telefono" => "917420313",
                "email" => "general@saintsual.com",                
                'full_name' => "Saint Sual SLU",
                "direccion" => "c/ecuador, 12",
                "cp" => "28850",
                "poblacion" => "torrejon de ardoz",
                "provincia" => "Madrid",
                "nif" => "B75018119",
                "tipo_id" => Tipo::where('name','PROV')->first()->id,
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "R.E. Autónomos",
                "telefono" => "000000000",
                "email" => "",                
                'full_name' => "R.E. Autónomos",
                "direccion" => "",
                "cp" => "",
                "poblacion" => "",
                "provincia" => "",
                "nif" => "",
                "tipo_id" => Tipo::where('name','GAS')->first()->id,
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "Caixabank SA",
                "telefono" => "111111111",
                "email" => "",                
                'full_name' => "Caixabank SA",
                "direccion" => "",
                "cp" => "",
                "poblacion" => "",
                "provincia" => "",
                "nif" => "",
                "tipo_id" => Tipo::where('name','GAS')->first()->id,
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
            [
                "alias" => "Permasan",
                "telefono" => "222222222",
                "email" => "",                
                'full_name' => "Permasan, Josefa Perez Castillo",
                "direccion" => "",
                "cp" => "",
                "poblacion" => "",
                "provincia" => "",
                "nif" => "29759859K",
                "tipo_id" => Tipo::where('name','GAS')->first()->id,
                "url_home" => "",
                "url_search" => "",
                "url_factura" => "",
            ],
        ];
        foreach ($facturantes as $facturante) {
            $f = Facturante::Create([
                "alias" => $facturante['alias'],
                "telefono" => $facturante['telefono'],
                "slug" => $facturante[Str::slug('telefono')],                    
            ]);
            $d = Direccion::Create([
                'full_name' => $facturante['full_name'],
                'telefono' => $facturante['telefono'],
                "direccion" => $facturante['direccion'],
                "cp" => $facturante['cp'],
                "poblacion" => $facturante['poblacion'],
                "provincia" => $facturante['provincia'],
                "nif" => $facturante['nif'],
                "tipo_id" =>$facturante['tipo_id'],
            ]);
        }

        //VENTA
        /*
        $facturantes = Facturante::whereHas('tipo_factura', function(Builder $query){
            $query->whereHas('operacion', function(Builder $query){
                $query->where('name','VENTA');
            });
        })->get();
        */
        $contactos = Contacto::factory(10)->cliente()->create();
        
        foreach($contactos as $contacto){
            for($i=0; $i < random_int(0,1); $i++){
                Direccion::factory()->sindatos()->create([
                    'full_name' => Str::upper($contacto->alias),
                    'telefono' => $contacto->telefono,
                    'contacto_id' => $contacto->id,
                ]);
            }
            for($i=0; $i < random_int(1,3); $i++){
                Direccion::factory()->create([
                    'full_name' => Str::upper($contacto->alias),
                    'telefono' => $contacto->telefono,
                    'contacto_id' => $contacto->id,
                ]);
               
                
            }
        }
    
        /*
        
        //COMPRAS - PROV
        Facturante::factory(5)->create(["tipo_id" => Tipo::where('name','PROV')->first()]);

        //GASTOS
        Facturante::factory(15)->create(["tipo_id" => Tipo::where('name','GAS')->first()]);
        Facturante::factory(15)->create(["tipo_id" => Tipo::where('name','N/D')->first()]);

        //VENTAS
        Facturante::factory(90)->create();
    */
    }
}