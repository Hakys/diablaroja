<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use SimpleXMLElement;
use Illuminate\Support\Str;
use DateTime;
use Illuminate\Database\QueryException;
use App\Models\Producto;

class ReadXmlController extends Controller
{
    public function print_array($key,$array){
        echo "[".$key."]: ";
        if(is_array($array))
            foreach ($array as $subkey => $value)
                $this->print_array($subkey,$value);
        else
           echo $array."-";
        echo "<br><br>";
    }

    public static function index($name,$limit=-1){
        switch ($name) {
            case 'DL1':
                //$url = "https://diablaroja.es/example.xml";
                $url = "https://store.dreamlove.es/dyndata/exportaciones/csvzip/catalog_1_50_125_2_eb10a792c0336bc695e2b0ec29d88402_xml_plain.xml";
                $to = "public\imports\dreamlove2.xml";
                $xmlString = file_get_contents($url);
                if(Storage::put($to,$xmlString))
                    echo "DL: EXITO";
                else
                    echo "DL1: ERROR";
                break;
                /*
            case 'DL2':
                $proveedor = Proveedor::whereHas('emisor',function(Builder $query){
                    $query->whereHas('facturante', function(Builder $query){
                        $query->where('alias',"Dreamlove INT. SL");
                    });
                })->first();
                $to = storage_path("app\public\imports\dreamlove2.xml");
                $xmlString = file_get_contents($to);
                $xmlObject = simplexml_load_string($xmlString);
                $json = json_encode($xmlObject);
                $phpArray = json_decode($json, true);
                $productos = $phpArray['product'];
                foreach($productos as $producto){
                    dd($producto);
                    $producto_array = [];
                    $producto_array = [
                        'proveedor_id' => (integer) $proveedor->id,
                        'referencia' => (string) $producto['public_id'],
                        'title' => $producto['title'],
                        //'slug' => Str::slug((string) ($producto['title']."-".$producto['public_id'])),
                        'stock' => (integer) $producto['stock']['location'],
                        /*
                        'coste' => (float) $product->cost_price,
                        'price' => (float) $product->price,
                        'vat' => (float) $product->vat,
                        'title' => (string) $product->title,

                        'new' => (integer) $product->new,
                        'available' => (integer) $product->available,
                        'url' => (string) $product->product_url,

                        'html_description' => (string) $product->html_description,
                        *
                        'release_at' => new Datetime($producto['release_date']),
                        'updated_at' => new Datetime($producto['updated']),
                    ];
                    dd($producto_array);
                }
                break;
                */
            case 'DL2':
                /*
                $proveedor = Proveedor::whereHas('emisor',function(Builder $query){
                    $query->whereHas('facturante', function(Builder $query){
                        $query->where('alias',"Dreamlove INT. SL");
                    });
                })->first();
                */
                $to = storage_path("app\public\imports\dreamlove2.xml");
                $xml = new SimpleXMLElement($to,LIBXML_NOCDATA,true);
                $xml->asXML($to);
                $i=0;
                foreach($xml->product as $product){
                    $url_image = (string) $product->images[0]->image[0]->src;
                    foreach($product->images[0]->image as $img){
                        if($img['preferred']) $url_image = $img->src;
                        //echo $img['preferred']; echo $img->src."</br>";
                    }
                    
                    //dd($product->images[0]->image[2]);
                    //dd($product->images[0]->image[0]['preferred']);
                    //dd($product->images[0]->image[0]->src);
                    
                    $producto_array = [];
                    $producto_array = [
                        //'proveedor_id' => (integer) $proveedor->id,
                        'referencia' => (string) $product->public_id,
                        'stock' => (integer) $product->stock->location,
                        'coste' => (float) $product->cost_price,
                        'price' => (float) $product->price,
                        'vat' => (float) $product->vat,
                        'title' => (string) $product->title,
                        'slug' => Str::slug(((string) $product->title)."-".((string) $product->public_id)),
                        'new' => (integer) $product->new,
                        'available' => (integer) $product->available,
                        'url' => (string) $product->product_url,
                        'release_at' => new Datetime($product->release_date),
                        'updated_at' => new Datetime($product->updated),
                        'html_description' => (string) $product->html_description,
                        'url_image' => (string) $url_image,
                        'direccion' => (integer) 7,
                    ];

                    try {
                        Producto::create($producto_array);
                    } catch (QueryException $e) {
                        echo now()." ref. ".$product->public_id." ERROR: ".$e->getCode()."<br/>";
                        $i--;
                    } 
                    $i++;    
                    if($i>$limit) break;
                }
                echo "DL2: FIN";
                break;
            case 'DL3':
                $to = storage_path("app\public\imports\dreamlove2.xml");
                //$xmlFile = file_get_contents(public_path('dataset.xml'));
                $xmlFile = file_get_contents($to);
		
                $xmlObject = simplexml_load_string($xmlFile);
                    
                $jsonFormatData = json_encode($xmlObject);
                $result = json_decode($jsonFormatData, true); 
                    
                dd($result);
                break;
            default:
                return redirect('/dashboard');
                break;
        }
    }
}
