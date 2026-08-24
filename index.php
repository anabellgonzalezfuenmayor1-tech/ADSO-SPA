<?php

//variables controladoras
$contador_empleado = 0;

//datos de prueba
$empleados_dp = [
    [
        "id" => 1,
        "nombre" => "Vanitas",
        "especialidades" => [1, 3, 4]
    ],
    [
        "id" => 2,
        "nombre" => "Marinnette",
        "especialidades" => [4, 5, 6]
    ],
    [
        "id" => 3,
        "nombre" => "Adrien",
        "especialidades" => [7, 2, 1]
    ],
    [
        "id" => 4,
        "nombre" => "Noe",
        "especialidades" => [2]
    ],
];

$citas_dp = [
    [
        "cliente" => "Ana",
        "cita" => [
            [
                "servicio" => 1,
                "empleado" => 3
            ]
        ],
        "dia" => "lunes",
        "hora_inicio" => 8
    ],
    [
        "cliente" => "Mariana",
        "cita" => [
            [
                "servicio" => 2,
                "empleado" => 4
            ]
        ],
        "dia" => "martes",
        "hora_inicio" => 8
    ],
    [
        "cliente" => "Atenea",
        "cita" => [
            [
                "servicio" => 1,
                "empleado" => 1
            ],
            [
                "servicio" => 2,
                "empleado" => 4
            ],
            [
                "servicio" => 3,
                "empleado" => 1
            ]
        ],
        "dia" => "miercoles",
        "hora_inicio" => 8
    ],
    [
        "cliente" => "Penelope",
        "cita" => [
            [
                "servicio" => 1,
                "empleado" => 1
            ]
        ],
        "dia" => "viernes",
        "hora_inicio" => 8
    ],
    [
        "cliente" => "Penelope",
        "cita" => [
            [
                "servicio" => 2,
                "empleado" => 3
            ]
        ],
        "dia" => "sabado",
        "hora_inicio" => 8
    ]
];

// arrreglso definidos
$diasSemana = [
    "lunes",
    "martes",
    "miercoles",
    "jueves",
    "viernes",
    "sabado"
];

$servicios = [
    [
        "id" => 1,
        "nombre" => "Limpieza facial",
        "precio" => 80000,
        "duracion" => 2
    ],
    [
        "id" => 2,
        "nombre" => "Manicure",
        "precio" => 35000,
        "duracion" => 2
    ],
    [
        "id" => 3,
        "nombre" => "Pedicure",
        "precio" => 40000,
        "duracion" => 1
    ],
    [
        "id" => 4,
        "nombre" => "Masaje relajante",
        "precio" => 90000,
        "duracion" => 1
    ],
    [
        "id" => 5,
        "nombre" => "Masaje descontracturante",
        "precio" => 100000,
        "duracion" => 1
    ],
    [
        "id" => 6,
        "nombre" => "Exfoliación corporal",
        "precio" => 60000,
        "duracion" => 1
    ],
    [
        "id" => 7,
        "nombre" => "Tratamiento antiedad",
        "precio" => 120000,
        "duracion" => 1
    ]
];

// datos ingresados
$empleados = [
    [
        "id" => 1,
        "nombre" => "Vanitas",
        "especialidades" => [1, 3, 4]
    ]
];
$citas = [
    [
        "cliente" => "Ana",
        "cita" => [
            [
                "servicio" => 1,
                "empleado" => 3
            ]
        ],
        "dia" => "lunes",
        "hora_inicio" => 8
    ]
];

// funciones
//mostrar datos 
function show_data($empleados, $citas)
{
    echo "Empleados: \n";
    foreach ($empleados as $empleado) {
        echo "\n\nId: " . $empleado["id"] . " Nombre: " . $empleado["nombre"] . " Especialidades: ";
        $cont = 0;
        foreach ($empleado["especialidades"] as $especialidad) {
            $cont += 1;
            if (count($empleado["especialidades"]) != $cont) {
                echo $especialidad . ", ";
            } else {
                echo $especialidad;
                echo "\n";
            }
        }
        echo "\n";
    }
    echo "Citas: \n";
    foreach ($citas as $cita) {
        echo "Cliente: " . $cita["cliente"] . " ";
        $cont = 0;
        foreach ($cita["cita"] as $ct) {
            $cont += 1;
            if (count($cita["cita"]) != $cont) {
                echo "Servicio: " . $ct["servicio"]. " Empleado: ".$ct["empleado"] . ", ";
            } else {
                echo "Servicio: " . $ct["servicio"]. " Empleado: ".$ct["empleado"];
                echo "\n";
            }
        }
        echo "\n";
    }
}
//option ingresada invalida
function option_invalid()
{
    return "\n<===                Opción ingresada inválida                ===>\n\n";
}

function datos_prueba(&$empleados, $empleados_dp, &$citas, $citas_dp)
{
    $empleados = $empleados_dp;
    $citas = $citas_dp;
    echo "\n<===        Datos de prueba ingresados correctamente         ===>\n\n";
}

// funciones de empleados
function registrar_empleado($servicios, &$empleados, &$contador_empleado)
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
                echo option_invalid();
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
                        $contador_empleado += 1;
                        $empleados[] = [
                            "id" => $contador_empleado,
                            "nombre" => $nombre,
                            "especialidades" => $especialidades
                        ];

                        echo "\n";
                        echo "=================================================================\n";
                        echo "                Operación realizada correctamente.              \n";
                        echo "=================================================================\n";

                        break;
                    } else {
                        echo option_invalid();
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
                echo option_invalid();
            }
        }

        if ($isN) {
            return false;
        }
    }
}
//
$es_Activo = true;
while ($es_Activo) {
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
            $sale = registrar_empleado($servicios, $empleados, $contador_empleado);
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
            $es_Activo = false;
            break;

        case "dp":
            datos_prueba($empleados, $empleados_dp, $citas, $citas_dp);
            break;

        case "md":
            show_data($empleados, $citas);
            break;
        default:
            echo option_invalid();
            break;
    }
}
