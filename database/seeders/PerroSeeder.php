<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Perro;
use Illuminate\Database\Seeder;

class PerroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Perro = new Perro;
            $Perro->name = 'Pastor aleman';
            $Perro->imgurl = 'https://www.happets.com/blog/wp-content/uploads/2020/02/pastor-aleman-alimentacion-y-cuidados-1180x838.jpg';
            $Perro->descripcion = 'El pastor alemán u ovejero alemán (en alemán: Deutscher Schäferhund) es una raza canina que proviene de Alemania. La raza es relativamente nueva, ya que su origen se remonta a 1899. Forman parte del grupo de pastoreo, ya que fueron perros desarrollados originalmente para reunir y vigilar ganado. Desde entonces, sin embargo, gracias a su fuerza, inteligencia, capacidad de entrenamiento y obediencia';
            $Perro->save();
            $Perro = new Perro;
                $Perro->name = 'French Poodle';
                $Perro->imgurl = 'https://www.purina-latam.com/sites/g/files/auxxlc391/files/styles/kraken_generic_max_width_960/public/Purina%C2%AE%20Que%20sabes%20del%20Poodle.jpg';
            $Perro->descripcion = 'Digno, elegante y cariñoso, el Poodle es originario de Alemania y se encargaba de recoger las presas de caza que caían en el agua. Tiene tres diferentes tamaños. Además de su belleza, el Poodle es conocido por su inteligencia superior y su capacidad de aprendizaje. Es una raza activa que puede vivir en diversos espacios siempre y cuando se ejercite todos los días. Su pelaje requiere limpieza regular.';
            $Perro->save();
            $Perro = new Perro;
                $Perro->name = 'Xoloitzcuintle';
                $Perro->imgurl = 'https://www.diariodesevilla.es/2021/10/18/mascotas/perro-xoloitzcuintle-simbolo-Mexico-muertos_1621048036_145661734_667x375.jpg';
            $Perro->descripcion = 'El xoloitzcuintle o xoloitzcuintli es una raza canina prácticamente sin pelo con promedio de vida entre 12-14 años. Es originario de México; es presentado en tamaño toy, estándar y mediano. Se le conoce por su endemismo en ese país y su estrecha relación con la cultura mexica.';
            $Perro->save();

    }
}
