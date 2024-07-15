<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoServicio;

class TipoServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipoServicios = [
            [
                'nombre' => 'Seguridad intramuros',
                'descripcion' => 'Los servicios intramuros abarcan funciones de seguridad para proteger espacios físicos, incluyendo sistemas electrónicos, patrullaje, control de acceso, monitoreo, respuesta a emergencias y gestión de crisis, adaptándose a las necesidades específicas del cliente. Los guardias de seguridad, altamente capacitados, son demandados en diversos sectores como centros comerciales y hospitales, y se especializan en roles como guardias intramuros, armados, no armados, seguridad ejecutiva, para eventos y vigilancia residencial.',
                'estatus' => true,
            ],
            [
                'nombre' => 'Custodia de transporte de mercancias',
                'descripcion' => 'Nuestro servicio de custodia de envíos garantiza la seguridad durante el transporte mediante custodios a bordo, tecnología avanzada de rastreo, y comunicación constante con el centro de operaciones y autoridades. Adaptado a tus necesidades, este servicio reduce significativamente el riesgo de incidentes y pérdidas, asegurando que tus mercancías lleguen puntualmente y sin contratiempos. Incluye custodios capacitados, vehículos especializados y tecnología de seguimiento avanzada, proporcionando tranquilidad total durante el transporte.',
                'estatus' => true,
            ],
            [
                'nombre' => 'Protección ejecutiva',
                'descripcion' => 'En nuestra empresa, ofrecemos servicios de protección ejecutiva diseñados para brindar seguridad integral y confiable a ejecutivos y sus familias. Contamos con un equipo altamente capacitado y comprometido, preparado para enfrentar cualquier situación mediante planificación de rutas seguras y respuesta rápida ante emergencias. Valoramos la confianza de nuestros clientes, superando sus expectativas con innovación y mejora continua. Al elegir nuestros servicios, los clientes reciben seguridad personalizada de la más alta calidad, caracterizada por ser profesional, confiable, discreta, preventiva y resolutiva.',
                'estatus' => true,
            ],
            [
                'nombre' => 'Protección perimetral',
                'descripcion' => 'La seguridad perimetral integra elementos y sistemas de seguridad electrónicos o mecánicos para proteger perímetros físicos extensos, detectando y disuadiendo intrusiones en instalaciones sensibles. Utiliza recursos distribuidos en varios niveles para controlar el acceso de usuarios autorizados y negar el acceso no autorizado, asegurando que los inmuebles estén resguardados y vigilados en todo momento. Estos sistemas, que deben contar con tecnología avanzada y monitoreo constante, son clasificados según el medio de detección utilizado. Nuestro servicio de protección perimetral es altamente efectivo, confiable, seguro, preventivo y resolutivo.',
                'estatus' => true,
            ],
        ];

        foreach ($tipoServicios as $tipoServicio) {
            TipoServicio::create($tipoServicio);
        }
    }
}
