<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Operacion;
use App\Models\Tipo;
use App\Models\Contacto;
use App\Models\Direccion;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //COMPRA-VENTA
        $compraventa = Operacion::where('name','COMPRAVENTA')->first();
        $contactos = [
            [
                "alias" => "Julia Chaparro Rosa",
                "telefono" => "653811711",
                "slug" => Str::slug("653811711"),
                "operacion_id" => $compraventa->id,
            ],[
                "alias" => "Antonio Vigo Lobato",
                "telefono" => "653178954",
                "slug" => Str::slug("653178954"),
                "operacion_id" => $compraventa->id,
            ],
        ];
        
        foreach($contactos as $contacto){
            $contacto = Contacto::Create($contacto);
            $comprador = Tipo::where('name','Comprador')->first();            
            Direccion::factory()->create([
                'full_name' => $contacto->alias." C",
                'telefono' => $contacto->telefono,
                "direccion" => "Calle Alfonso XIII, 8, Bajo C",
                "cp" => "21002",
                "poblacion" => "Huelva",
                "provincia" => "Huelva",
                "nif" => "",
                "contacto_id" => $contacto->id,
                "tipo_id" => $comprador->id,
            ]);
            $consumidor = Tipo::where('name','Consumidor')->first();
            Direccion::factory()->create([
                'full_name' => $contacto->alias." G",
                'telefono' => $contacto->telefono,
                "direccion" => "Calle Alfonso XIII, 8, Bajo C",
                "cp" => "21002",
                "poblacion" => "Huelva",
                "provincia" => "Huelva",
                "nif" => "",
                "contacto_id" => $contacto->id,
                "tipo_id" => $consumidor->id,
            ]);
            $vendedor = Tipo::where('name','Vendedor')->first();
            Direccion::factory()->create([
                'full_name' => $contacto->alias." V",
                'telefono' => $contacto->telefono,
                "direccion" => "Calle Alfonso XIII, 8, Bajo C",
                "cp" => "21002",
                "poblacion" => "Huelva",
                "provincia" => "Huelva",
                "nif" => "",
                "contacto_id" => $contacto->id,
                "tipo_id" => $vendedor->id,
            ]);

        }

        //COMPRAS
        $compra_id = Operacion::where('name','COMPRA')->first()->id;
        $gasto_id = Operacion::where('name','GASTO')->first()->id;
        $venta_id = Operacion::where('name','VENTA')->first()->id;


        $proveedor_id = Tipo::where('name','PROV')->first()->id;
        $desgrabable_id = Tipo::where('name','GAS')->first()->id;
        $nodesgrabable_id = Tipo::where('name','N/D')->first()->id;

        $contactos = [
            [
                "alias" => "Dreamlove INT. SL",
                "telefono" => "955630664",
                "operacion_id" => $compra_id,
                "tipo_id" => Tipo::where('name','DL')->first()->id,                
                "email" => "",
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
                "operacion_id" => $compra_id,
                "tipo_id" => Tipo::where('name','LCH')->first()->id,
                "email" => "",
                "direccion" => "-",
                "cp" => "21002",
                "poblacion" => "Valencia",
                "provincia" => "Valencia",
                "nif" => "",
                "url_home" => "https://www.lovecherry.es/es/",
                "url_search" => "https://www.lovecherry.es/es/#/dfclassic/query_name=match_and&query=",
                "url_factura" => "https://www.lovecherry.es/es/module/customerattachment/default",
            ],[
                "alias" => "Grutinet SL",
                "telefono" => "960707532",                
                "operacion_id" => $compra_id,
                "tipo_id" => Tipo::where('name','GRU')->first()->id,
                "email" => "",
                "direccion" => "-",
                "cp" => "21002",
                "poblacion" => "Murcia",
                "provincia" => "Murcia",
                "nif" => "",
                "url_home" => "https://www.grutinetpro.com/tienda.asp",
                "url_search" => "https://www.grutinetpro.com/catalogo.asp?busc=",
                "url_factura" => "https://www.grutinetpro.com/micuenta/facturas.asp",
            ],[
                "alias" => "Diabla Roja - Almacén",
                "telefono" => "684100170",
                "operacion_id" => $compra_id,
                "tipo_id" => Tipo::where('name','DR')->first()->id,
                "email" => "",
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
                "operacion_id" => $compra_id,
                "tipo_id" => $proveedor_id,
                "email" => "pedidos@paudiet.com",
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
                "operacion_id" => $compra_id,
                "tipo_id" => $proveedor_id,
                "email" => "shungamayorista@gmail.com",
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
                "operacion_id" => $compra_id,
                "tipo_id" => $proveedor_id,
                "email" => "",
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
                "telefono" => "333333333",
                "operacion_id" => $compra_id,
                "tipo_id" => $proveedor_id,
                "email" => "",
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
                "operacion_id" => $compra_id,
                "tipo_id" => $proveedor_id,
                "email" => "info@erospartner.com",
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
                "operacion_id" => $compra_id,
                "tipo_id" => $proveedor_id,
                "email" => "general@saintsual.com",
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
                "telefono" => "000000000",
                "operacion_id" => $gasto_id,
                "tipo_id" => $desgrabable_id,
                "email" => "",
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
                "telefono" => "111111111",
                "operacion_id" => $gasto_id,
                "tipo_id" => $desgrabable_id,
                "email" => "",
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
                "telefono" => "222222222",
                "operacion_id" => $gasto_id,
                "tipo_id" => $desgrabable_id,
                "email" => "",
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
        foreach ($contactos as $contacto) {
            $c = Contacto::Create([
                "alias" => $contacto['alias'],
                "telefono" => $contacto['telefono'],
                "slug" => $contacto[Str::slug('telefono')],
                "operacion_id" => $contacto['operacion_id'],                    
            ]);
            Direccion::Create([
                'full_name' => $contacto['alias'],
                'telefono' => $contacto['telefono'],
                "email" => $contacto['email'],
                "direccion" => $contacto['direccion'],
                "cp" => $contacto['cp'],
                "poblacion" => $contacto['poblacion'],
                "provincia" => $contacto['provincia'],
                "nif" => $contacto['nif'],
                "tipo_id" => $contacto['tipo_id'],
                "contacto_id" => $c->id,
            ]);
        }

        //VENTA       
        $contactos = Contacto::factory(20)->cliente()->create();
        $tipos = Tipo::whereHas("operacion",function(Builder $query){
            $query->whereIn('name',['VENTA']);
        })->whereNot('name','Vendedor');
        $tipo_DRO_id = Tipo::where('name','DRO')->first()->id;
       
        foreach($contactos as $contacto){
            $direccions = [];
            if(random_int(0,2)){
                $direccions[] = Direccion::factory()->sindatos()->create([
                    'telefono' => $contacto->telefono,
                    'tipo_id' => $tipo_DRO_id,
                    'contacto_id' => $contacto->id,
                ]);
            }
            for($i=0; $i < random_int(0,3); $i++){               
                $direccions[] = Direccion::factory()->create([
                    'full_name' => Str::upper($contacto->alias),
                    'telefono' => $contacto->telefono,
                    "tipo_id" => $tipos->inRandomOrder()->first()->id,
                    'contacto_id' => $contacto->id,
                ]);
            }
        }
    
        /*
        
        //COMPRAS - PROV
        Facturante::factory(5)->create(["tipo_factura_id" => TipoFactura::where('name','PROV')->first()]);

        //GASTOS
        Facturante::factory(15)->create(["tipo_factura_id" => TipoFactura::where('name','GAS')->first()]);
        Facturante::factory(15)->create(["tipo_factura_id" => TipoFactura::where('name','N/D')->first()]);

        //VENTAS
        Facturante::factory(90)->create();
    */
    }
}
