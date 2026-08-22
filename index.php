<?php


$citas = [];
$empleados = [];


$diasSemana = [
    "Lunes",
    "Martes",
    "Miércoles",
    "Jueves",
    "Viernes",
    "Sábado"
];



//servicios lista
$servicios = [
    [
        "id" => 1,
        "nombre" => "Limpieza facial",
        "precio" => 80000,
        "duracion" => "2 horas"
    ],
    [
        "id" => 2,
        "nombre" => "Manicure",
        "precio" => 35000,
        "duracion" => "1 hora"
    ],
    [
        "id" => 3,
        "nombre" => "Pedicure",
        "precio" => 40000,
        "duracion" => "1 hora"
    ],
    [
        "id" => 4,
        "nombre" => "Masaje relajante",
        "precio" => 90000,
        "duracion" => "1 hora"
    ],
    [
        "id" => 5,
        "nombre" => "Masaje descontracturante",
        "precio" => 100000,
        "duracion" => "1 hora"
    ],
    [
        "id" => 6,
        "nombre" => "Exfoliación corporal",
        "precio" => 60000,
        "duracion" => "1 hora"
    ],
    [
        "id" => 7,
        "nombre" => "Tratamiento antiedad",
        "precio" => 120000,
        "duracion" => "2 horas"
    ]
];

// funciones
function OptionInvalid()
{
    return "\n<===             Opción ingresada inválida             ===>\n\n";
}

// funciones de empleados
function registrarEmpleado($servicios, &$empleados)
{
    while (true) {
        echo "\n";
        echo "=================================================================\n";
        echo "                     REGISTRAR EMPLEADO                          \n";
        echo "=================================================================\n\n";

        $nombre = readline("Ingrese el nombre del empleado (presione enter para ir al menú): ");

        if ($nombre == "") {
            return false;
        }

        $especialidades = [];

        while (true) {
            // Catálogo de especialidades
            echo "\n";
            echo "=================================================================\n";
            echo "                  ESPECIALIDADES DISPONIBLES                    \n";
            echo "=================================================================\n\n";

            foreach ($servicios as $servicio) {
                echo "  (" . $servicio["id"] . ") " . $servicio["nombre"] . "\n";
            }

            echo "\n=================================================================\n";

            $especialidad = readline("Ingrese el número de la especialidad del empleado: ");

            if ($especialidad < 1 || $especialidad > count($servicios)) {
                echo OptionInvalid();
            } else {
                if (in_array($especialidad, $especialidades)) {
                    echo "\n";
                    echo "=================================================================\n";
                    echo "            El empleado ya tiene asignada esta especialidad.    \n";
                    echo "=================================================================\n";
                    continue;
                }

                $especialidades[] = $especialidad;

                echo "\n";
                echo "=================================================================\n";
                echo "              Especialidad asignada correctamente.              \n";
                echo "=================================================================\n";

                while (true) {
                    $otraEspecialidad = readline("\n¿Desea agregar otra especialidad? (s/n): ");

                    if (strtolower($otraEspecialidad) == "s") {
                        break;
                    } else if (strtolower($otraEspecialidad) == "n") {

                        $empleados[] = [
                            "nombre" => $nombre,
                            "especialidades" => $especialidades
                        ];

                        echo "\n";
                        echo "=================================================================\n";
                        echo "                Operación realizada correctamente.              \n";
                        echo "=================================================================\n";

                        break;

                    } else {
                        echo OptionInvalid();
                    }
                }

                if (strtolower($otraEspecialidad) == "n") {
                    break;
                }
            }
        }

        $isN = true;

        while (true) {
            $otroEmpleado = readline("\n¿Desea agregar otro empleado? (s/n): ");

            if (strtolower($otroEmpleado) == "s") {
                $isN = false;
                break;
            } else if (strtolower($otroEmpleado) == "n") {
                echo "\n";
                echo "=================================================================\n";
                echo "              Empleado(s) registrados correctamente.            \n";
                echo "=================================================================\n";
                break;
            } else {
                echo OptionInvalid();
            }
        }

        if ($isN) {
            return false;
        }
    }
}

$estado = true;

while ($estado) {
    echo "=================================================================\n";
    echo "                 BIENVENIDO AL MENU DE ADSO SPA                  \n";
    echo "=================================================================\n\n";

    echo "Seleccione una opción ingresando el número correspondiente:\n\n";
    echo "(1) Registrar empleado\n";
    echo "(2) Registrar cita\n";
    echo "(3) Total facturado por empleado\n";
    echo "(4) Servicio más solicitado\n";
    echo "(5) Agenda de un día\n";
    echo "(6) Detección de conflictos\n";
    echo "(7) Liquidación de comisiones\n";
    echo "(8) Salir\n\n";

    $op = readline("Ingrese el número de la opción: ");
    $op = strtolower($op);

    switch ($op) {
        case "1":
            $sale = registrarEmpleado($servicios, $empleados);
            echo "cantidad de empleados registrados: " . count($empleados) . "\n";
            break;

        case "2":
            break;

        case "3":
            break;

        case "4":
            break;

        case "5":
            break;

        case "6":
            break;

        case "7":
            break;

        case "8":
            $estado = false;
            break;

        case "dp":
            break;

        default:
            echo OptionInvalid();
            break;
    }
}
?>