<?php

$contador_empleado = 0;

$empleados_dp = [
    [
        "id" => 1,
        "nombre" => "Vanitas",
        "especialidades" => [1, 3, 4],
        "facturado" => 0,
    ],
    [
        "id" => 2,
        "nombre" => "Marinnette",
        "especialidades" => [4, 5, 6],
        "facturado" => 0,
    ],
    [
        "id" => 3,
        "nombre" => "Adrien",
        "especialidades" => [7, 2, 1],
        "facturado" => 0,
    ],
    [
        "id" => 4,
        "nombre" => "Noe",
        "especialidades" => [2],
        "facturado" => 0,
    ],
];

$citas_dp = [
    [
        "cliente" => "Juan",
        "cita" => [
            [
                "servicio" => 1,
                "empleado" => 3,
            ],
        ],
        "dia" => "lunes",
        "hora_inicio" => 8,
    ],
    [
        "cliente" => "Carlos",
        "cita" => [
            [
                "servicio" => 3,
                "empleado" => 1,
            ],
        ],
        "dia" => "lunes",
        "hora_inicio" => 8,
    ],
    [
        "cliente" => "Alicia",
        "cita" => [
            [
                "servicio" => 2,
                "empleado" => 4,
            ],
        ],
        "dia" => "martes",
        "hora_inicio" => 8,
    ],
    [
        "cliente" => "Sherman",
        "cita" => [
            [
                "servicio" => 4,
                "empleado" => 2,
            ],
        ],
        "dia" => "martes",
        "hora_inicio" => 9,
    ],
    [
        "cliente" => "La Reina de Hielo",
        "cita" => [
            [
                "servicio" => 7,
                "empleado" => 3,
            ],
        ],
        "dia" => "martes",
        "hora_inicio" => 11,
    ],
    [
        "cliente" => "Marta",
        "cita" => [
            [
                "servicio" => 1,
                "empleado" => 1,
            ],
        ],
        "dia" => "miercoles",
        "hora_inicio" => 8,
    ],
    [
        "cliente" => "Ana",
        "cita" => [
            [
                "servicio" => 5,
                "empleado" => 2,
            ],
        ],
        "dia" => "miercoles",
        "hora_inicio" => 10,
    ],
    [
        "cliente" => "El Sombrerero",
        "cita" => [
            [
                "servicio" => 2,
                "empleado" => 3,
            ],
        ],
        "dia" => "miercoles",
        "hora_inicio" => 8,
    ],
    [
        "cliente" => "Carlos",
        "cita" => [
            [
                "servicio" => 4,
                "empleado" => 1,
            ],
        ],
        "dia" => "jueves",
        "hora_inicio" => 9,
    ],
    [
        "cliente" => "El Conejo",
        "cita" => [
            [
                "servicio" => 6,
                "empleado" => 2,
            ],
        ],
        "dia" => "jueves",
        "hora_inicio" => 8,
    ],
    [
        "cliente" => "Alicia",
        "cita" => [
            [
                "servicio" => 3,
                "empleado" => 1,
            ],
        ],
        "dia" => "viernes",
        "hora_inicio" => 8,
    ],
    [
        "cliente" => "Juan",
        "cita" => [
            [
                "servicio" => 2,
                "empleado" => 4,
            ],
        ],
        "dia" => "viernes",
        "hora_inicio" => 8,
    ],
    [
        "cliente" => "La Reina Roja",
        "cita" => [
            [
                "servicio" => 1,
                "empleado" => 3,
            ],
        ],
        "dia" => "viernes",
        "hora_inicio" => 10,
    ],
    [
        "cliente" => "Marta",
        "cita" => [
            [
                "servicio" => 4,
                "empleado" => 1,
            ],
        ],
        "dia" => "sabado",
        "hora_inicio" => 10,
    ],
    [
        "cliente" => "Sherman",
        "cita" => [
            [
                "servicio" => 5,
                "empleado" => 2,
            ],
        ],
        "dia" => "sabado",
        "hora_inicio" => 9,
    ],
];

$diasSemana = [
    "lunes",
    "martes",
    "miercoles",
    "jueves",
    "viernes",
    "sabado",
];

$servicios = [
    [
        "id" => 1,
        "nombre" => "Limpieza facial",
        "precio" => 80000,
        "duracion" => 2,
    ],
    [
        "id" => 2,
        "nombre" => "Manicure",
        "precio" => 35000,
        "duracion" => 2,
    ],
    [
        "id" => 3,
        "nombre" => "Pedicure",
        "precio" => 40000,
        "duracion" => 1,
    ],
    [
        "id" => 4,
        "nombre" => "Masaje relajante",
        "precio" => 90000,
        "duracion" => 1,
    ],
    [
        "id" => 5,
        "nombre" => "Masaje descontracturante",
        "precio" => 100000,
        "duracion" => 1,
    ],
    [
        "id" => 6,
        "nombre" => "Exfoliación corporal",
        "precio" => 60000,
        "duracion" => 1,
    ],
    [
        "id" => 7,
        "nombre" => "Tratamiento antiedad",
        "precio" => 120000,
        "duracion" => 1,
    ],
];

$empleados = [
    [
        "id" => 1,
        "nombre" => "Vanitas",
        "especialidades" => [1, 3, 4],
        "facturado" => 0,
    ],
];

$citas = [
    [
        "cliente" => "Ana",
        "cita" => [
            [
                "servicio" => 1,
                "empleado" => 3,
            ],
        ],
        "dia" => "lunes",
        "hora_inicio" => 8,
    ],
];

function show_data(array $empleados, array $citas): void
{
    echo "\nEmpleados: \n";

    foreach ($empleados as $empleado) {
        echo "Id: " . $empleado["id"];
        echo " Nombre: " . $empleado["nombre"];
        echo " Especialidades: " . implode(", ", $empleado["especialidades"]) . "\n";
    }

    echo "\nCitas: \n";

    foreach ($citas as $cita) {
        echo "Cliente: " . $cita["cliente"] . " ";

        $cont = 0;

        foreach ($cita["cita"] as $ct) {
            $cont += 1;

            if (count($cita["cita"]) != $cont) {
                echo "Servicio: " . $ct["servicio"];
                echo " Empleado: " . $ct["empleado"] . ", ";
            } else {
                echo "Servicio: " . $ct["servicio"];
                echo " Empleado: " . $ct["empleado"];
                echo "\n";
            }
        }

        echo "\n";
    }
}

function option_invalid(): void
{
    echo "\n<===                Opción ingresada inválida                ===>\n\n";
}

function datos_prueba(
    array &$empleados,
    array $empleados_dp,
    array &$citas,
    array $citas_dp
): void {
    $empleados = $empleados_dp;
    $citas = $citas_dp;

    echo "\n<===        Datos de prueba ingresados correctamente         ===>\n\n";
}

function registrar_empleado(
    array $servicios,
    array &$empleados,
    int &$contador_empleado
): void {
    while (true) {
        echo "\n";
        echo "=================================================================\n";
        echo "                     REGISTRAR EMPLEADO                          \n";
        echo "=================================================================\n\n";

        $nombre = readline(
            "Ingrese el nombre del empleado (presione enter para ir al menú): "
        );

        if ($nombre == "") {
            return;
        }

        $especialidades = [];

        while (true) {
            echo "\n";
            echo "=================================================================\n";
            echo "                  ESPECIALIDADES DISPONIBLES                    \n";
            echo "=================================================================\n\n";

            foreach ($servicios as $servicio) {
                echo "  (" . $servicio["id"] . ") ";
                echo $servicio["nombre"] . "\n";
            }

            echo "\n=================================================================\n";

            $especialidad = readline(
                "Ingrese el número de la especialidad del empleado: "
            );

            if (!is_numeric($especialidad)) {
                option_invalid();
                continue;
            }

            $especialidad = (int) $especialidad;

            if ($especialidad < 1 || $especialidad > count($servicios)) {
                option_invalid();
                continue;
            }

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
                $otra_especialidad = readline(
                    "\n¿Desea agregar otra especialidad? (s/n): "
                );

                switch (strtolower($otra_especialidad)) {
                    case "s":
                        break 2;

                    case "n":
                        $contador_empleado += 1;

                        $empleados[] = [
                            "id" => $contador_empleado,
                            "nombre" => $nombre,
                            "especialidades" => $especialidades,
                            "facturado" => 0,
                        ];

                        echo "\n";
                        echo "=================================================================\n";
                        echo "                Operación realizada correctamente.              \n";
                        echo "=================================================================\n";

                        break 3;

                    default:
                        option_invalid();
                        break;
                }
            }
        }

        while (true) {
            $otro_empleado = readline(
                "\n¿Desea agregar otro empleado? (s/n): "
            );

            switch (strtolower($otro_empleado)) {
                case "s":
                    break 2;

                case "n":
                    echo "\n";
                    echo "=================================================================\n";
                    echo "              Empleado(s) registrados correctamente.            \n";
                    echo "=================================================================\n";

                    return;

                default:
                    option_invalid();
                    break;
            }
        }
    }
}

function total_facturado(
    array &$empleados,
    array $citas,
    array $servicios
): void {
    if (count($empleados) === 0) {
        echo "\n<===               No hay empleados registrados              ===>\n\n";
        return;
    }

    if (count($citas) === 0) {
        echo "\n<===                 No hay citas registradas                ===>\n\n";
        return;
    }

    foreach ($empleados as &$empleado) {
        $empleado["facturado"] = 0;

        foreach ($citas as $cita) {
            foreach ($cita["cita"] as $ct) {
                if ($ct["empleado"] == $empleado["id"]) {
                    foreach ($servicios as $servicio) {
                        if ($servicio["id"] == $ct["servicio"]) {
                            $empleado["facturado"] += $servicio["precio"];
                        }
                    }
                }
            }
        }
    }

    unset($empleado);

    usort($empleados, function ($a, $b) {
        return $b["facturado"] <=> $a["facturado"];
    });

    foreach ($empleados as $empleado) {
        echo "Nombre: " . $empleado["nombre"];
        echo " Facturado: $";
        echo number_format(
            $empleado["facturado"],
            0,
            ",",
            "."
        );
        echo "\n";
    }

    echo "\n<===          Total facturado por empleado calculado          ===>\n\n";
}

$es_activo = true;

while ($es_activo) {
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
            registrar_empleado(
                $servicios,
                $empleados,
                $contador_empleado
            );

            echo "Cantidad de empleados registrados: ";
            echo count($empleados) . "\n";
            break;

        case "2":
            break;

        case "3":
            total_facturado(
                $empleados,
                $citas,
                $servicios
            );
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
            $es_activo = false;
            break;

        case "dp":
            datos_prueba(
                $empleados,
                $empleados_dp,
                $citas,
                $citas_dp
            );
            break;

        case "md":
            show_data($empleados, $citas);
            break;

        default:
            option_invalid();
            break;
    }
}