<?php

$contador_empleado = 0;
$contador_dp = 0;

$empleados_dp = [
    [
        "id" => 1,
        "nombre" => "Vanitas",
        "especialidades" => [1, 3, 4],
        "facturado" => 0,
        "comisiones" => 0,
    ],
    [
        "id" => 2,
        "nombre" => "Marinnette",
        "especialidades" => [4, 5, 6],
        "facturado" => 0,
        "comisiones" => 0,
    ],
    [
        "id" => 3,
        "nombre" => "Adrien",
        "especialidades" => [7, 2, 1],
        "facturado" => 0,
        "comisiones" => 0,
    ],
    [
        "id" => 4,
        "nombre" => "Noe",
        "especialidades" => [2],
        "facturado" => 0,
        "comisiones" => 0,
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
        "total" => 0,
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
        "total" => 0,
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
        "total" => 0,
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
        "total" => 0
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
        "total" => 0
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
        "total" => 0
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
        "total" => 0
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
        "total" => 0
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
        "total" => 0
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
        "total" => 0
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
        "total" => 0
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
        "total" => 0
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
        "total" => 0
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
        "total" => 0
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
        "total" => 0
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

$empleados = [];

$citas = [];


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
    array $citas_dp,
    int &$contador_dp
): void {
    if ($contador_dp > 0) {
        echo "\n<===        Los datos de prueba ya han sido ingresados       ===>\n\n";
        return;
    }

    $empleados = $empleados_dp;
    $citas = $citas_dp;
    $contador_dp += 1;

    echo "\n<===        Datos de prueba ingresados correctamente         ===>\n\n";
}


function servicio_mas_solicitado(
    array &$citas,
    array $servicios
): void {
    if (count($citas) === 0) {
        echo "\n<===                 No hay citas registradas                ===>\n\n";
        return;
    }

    foreach ($citas as &$cita) {
        $cita["total"] = 0;

        foreach ($cita["cita"] as $ct) {
            foreach ($servicios as $servicio) {
                if ($servicio["id"] == $ct["servicio"]) {
                    $cita["total"] += $servicio["precio"];
                }
            }
        }
    }

    echo "\n";
    echo "=================================================================\n";
    echo "                     SERVICIO MAS SOLICITADO                     \n";
    echo "=================================================================\n\n";

    $servicio_mayor = null;
    $mayor_cantidad = 0;
    $mayor_total = 0;

    foreach ($servicios as $servicio) {
        $cantidad_servicio = 0;
        $total_servicio = 0;

        foreach ($citas as $cita) {
            foreach ($cita["cita"] as $ct) {
                if ($servicio["id"] == $ct["servicio"]) {
                    $cantidad_servicio += 1;
                    $total_servicio += $servicio["precio"];
                }
            }
        }

        if ($cantidad_servicio > $mayor_cantidad) {
            $mayor_cantidad = $cantidad_servicio;
            $mayor_total = $total_servicio;
            $servicio_mayor = $servicio;
        }
    }

    if ($servicio_mayor !== null) {
        echo "Servicio: " . $servicio_mayor["nombre"] . "\n";
        echo "Cantidad de veces solicitado: " . $mayor_cantidad . "\n";
        echo "Total facturado: $" . number_format(
            $mayor_total,
            2,
            ",",
            "."
        ) . "\n\n";
    }

    echo "\n<===          Servicio más solicitado calculado              ===>\n\n";
}


function agenda_por_dia(
    array &$citas,
    array $diasSemana,
    array $servicios,
    array $empleados
): void {
    if (count($citas) === 0) {
        echo "\n<===                 No hay citas registradas                ===>\n\n";
        return;
    }

    echo "\n";
    echo "=================================================================\n";
    echo "                      DIAS DE LA SEMANA                          \n";
    echo "=================================================================\n\n";

    while (true) {
        $contador = 1;

        foreach ($diasSemana as $dia) {
            echo "(" . $contador . ") " . $dia . "\n";
            $contador++;
        }

        echo "\n=================================================================\n\n";

        $dia_seleccionado = readline(
            "Ingrese el número del día de la semana (enter para volver): "
        );

        if ($dia_seleccionado === "") {
            break;
        }

        if (!is_numeric($dia_seleccionado)) {
            option_invalid();
            continue;
        }

        $dia_seleccionado = (int) $dia_seleccionado;

        if (
            $dia_seleccionado < 1 ||
            $dia_seleccionado > count($diasSemana)
        ) {
            option_invalid();
            continue;
        }

        echo "=================================================================\n";
        echo "                      AGENDA DEL " .
            strtoupper($diasSemana[$dia_seleccionado - 1]) .
            "                      \n";
        echo "=================================================================\n\n";

        usort($citas, function ($a, $b) {
            return $a["hora_inicio"] <=> $b["hora_inicio"];
        });

        facturado_por_cita($citas, $servicios);

        foreach ($citas as $cita) {
            if ($cita["dia"] === $diasSemana[$dia_seleccionado - 1]) {

                echo "Cliente: " . $cita["cliente"] . "\n";

                foreach ($cita["cita"] as $ct) {

                    foreach ($servicios as $servicio) {

                        if ($servicio["id"] === $ct["servicio"]) {

                            echo "Servicio: " . $servicio["nombre"] . "\n";

                            foreach ($empleados as $empleado) {

                                if ($empleado["id"] === $ct["empleado"]) {
                                    echo "Empleado asignado: " .
                                        $empleado["nombre"] . "\n";
                                }
                            }
                        }
                    }
                }

                echo "Hora de inicio: " .
                    $cita["hora_inicio"] .
                    ":00\n";

                echo "Total: $" .
                    number_format(
                        $cita["total"],
                        2,
                        ",",
                        "."
                    ) .
                    "\n\n";
            }
        }

        break;
    }

    echo "\n<===          Agenda de un día mostrada correctamente         ===>\n\n";
}


function facturado_por_cita(
    array &$citas,
    array $servicios
): void {
    if (count($citas) === 0) {
        return;
    }

    foreach ($citas as &$cita) {

        $cita["total"] = 0;

        foreach ($cita["cita"] as $ct) {

            foreach ($servicios as $servicio) {

                if ($servicio["id"] == $ct["servicio"]) {
                    $cita["total"] += $servicio["precio"];
                }
            }
        }
    }
}


function registrar_empleado(
    array $servicios,
    array &$empleados,
    int &$contador_empleado,
    int $contador_dp
): void {
    if ($contador_dp > 0) {
        echo "\n<=== No se puede registrar empleados(datos de prueba cargados) ===>\n\n";
        return;
    }

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

            if (
                $especialidad < 1 ||
                $especialidad > count($servicios)
            ) {
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
                            "comisiones" => 0,
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

    facturado_por_empleado(
        $empleados,
        $citas,
        $servicios
    );

    usort($empleados, function ($a, $b) {
        return $b["facturado"] <=> $a["facturado"];
    });

    echo "=================================================================\n";
    echo "                  TOTAL FACTURADO POR EMPLEADO                   \n";
    echo "=================================================================\n\n";

    foreach ($empleados as $empleado) {

        echo "Nombre: " . $empleado["nombre"];
        echo " Facturado: $";

        echo number_format(
            $empleado["facturado"],
            2,
            ",",
            "."
        );

        echo "\n";
    }

    echo "\n<===          Total facturado por empleado calculado          ===>\n\n";
}


function facturado_por_empleado(
    array &$empleados,
    array $citas,
    array $servicios
): void {
    foreach ($empleados as &$empleado) {

        $empleado["facturado"] = 0;

        foreach ($citas as $cita) {

            foreach ($cita["cita"] as $ct) {

                if ($ct["empleado"] == $empleado["id"]) {

                    foreach ($servicios as $servicio) {

                        if ($servicio["id"] == $ct["servicio"]) {

                            $empleado["facturado"] +=
                                $servicio["precio"];
                        }
                    }
                }
            }
        }
    }
}


function liquidacion_comisiones(
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

    echo "=================================================================\n";
    echo "                  LIQUIDACIÓN DE COMISIONES                     \n";
    echo "=================================================================\n\n";

    facturado_por_empleado(
        $empleados,
        $citas,
        $servicios
    );

    usort($empleados, function ($a, $b) {
        return $b["facturado"] <=> $a["facturado"];
    });

    $cont = 1;

    foreach ($empleados as &$empleado) {

        $contador_comisiones = 0;
        $total = 0;
        $total_comisiones = 0;

        foreach ($citas as $cita) {

            foreach ($cita["cita"] as $ct) {

                if ($ct["empleado"] == $empleado["id"]) {

                    $contador_comisiones += 1;
                    $total += $cita["total"];
                }
            }
        }

        if ($contador_comisiones >= 6) {
            $total_comisiones =
                $empleado["facturado"] * 0.12;
        } else {
            $total_comisiones =
                $empleado["facturado"] * 0.08;
        }

        $empleado["comisiones"] = $total_comisiones;

        if ($cont === 1) {

            $empleado["comisiones"] =
                $total_comisiones + 50000;

            echo "Empleado: " .
                $empleado["nombre"] .
                " <== Empleado con mayor facturación, recibe bono de $50.000,00\n";

            echo "Citas atendidas: " .
                $contador_comisiones .
                "\n";

            echo "Total Facturado: $" .
                number_format(
                    $empleado["facturado"],
                    2,
                    ",",
                    "."
                ) .
                "\n";

            echo "Total Comisiones: $" .
                number_format(
                    $empleado["comisiones"],
                    2,
                    ",",
                    "."
                ) .
                "\n\n";

        } else {

            echo "Empleado: " .
                $empleado["nombre"] .
                "\n";

            echo "Citas atendidas: " .
                $contador_comisiones .
                "\n";

            echo "Total Facturado: $" .
                number_format(
                    $empleado["facturado"],
                    2,
                    ",",
                    "."
                ) .
                "\n";

            echo "Total Comisiones: $" .
                number_format(
                    $empleado["comisiones"],
                    2,
                    ",",
                    "."
                ) .
                "\n\n";
        }

        $cont++;
    }

    echo "\n<===          Liquidación de comisiones calculada             ===>\n\n";
}


function registrar_cita(
    array $servicios,
    array $empleados,
    array &$citas,
    array $diasSemana,
    int $contador_dp
): void {
    if ($contador_dp > 0) {
        echo "\n<=== No se puede registrar citas(datos de prueba cargados) ===>\n\n";
        return;
    }

    if (count($empleados) === 0) {
        echo "\n<===               No hay empleados registrados              ===>\n\n";
        return;
    }

    $nombre = readline(
        "Digite el nombre del cliente (enter para salir): "
    );

    $hora_inicio = 0;

    if ($nombre == "") {
        return;
    }

    $servicios_escogidos = [];
    $dia_seleccionado = "";

    while (true) {

        echo "\n";
        echo "=================================================================\n";
        echo "                       REGISTRAR CITA                            \n";
        echo "=================================================================\n\n";

        foreach ($servicios as $servicio) {
            echo "  (" . $servicio["id"] . ") ";
            echo $servicio["nombre"] . "\n";
        }

        echo "=================================================================\n\n";

        $especialidad = readline(
            "Ingrese el número del servicio: "
        );

        if (!is_numeric($especialidad)) {
            option_invalid();
            continue;
        }

        $especialidad = (int) $especialidad;

        if (
            $especialidad < 1 ||
            $especialidad > count($servicios)
        ) {
            option_invalid();
            continue;
        }

        while (true) {

            echo "=================================================================\n";
            echo "           EMPLEADOS DISPONIBLES PARA EL SERVICIO               \n";
            echo "=================================================================\n\n";

            $contador_disp = 0;

            foreach ($empleados as $empleado) {

                if (
                    in_array(
                        $especialidad,
                        $empleado["especialidades"]
                    )
                ) {

                    echo "  (" .
                        $empleado["id"] .
                        ") Nombre: " .
                        $empleado["nombre"] .
                        "\n";

                    $contador_disp++;
                }
            }

            if ($contador_disp == 0) {

                echo "\n<===     No hay empleados disponibles para este servicio     ===>\n\n";

                break;
            }

            echo "=================================================================\n\n";

            $emp = readline(
                "Digite el número del empleado que desea escoger para el servicio: "
            );

            if (!is_numeric($emp)) {

                option_invalid();
                continue;
            }

            $emp = (int) $emp;

            $empleado_valido = false;

            foreach ($empleados as $empleado) {

                if (
                    $empleado["id"] == $emp &&
                    in_array(
                        $especialidad,
                        $empleado["especialidades"]
                    )
                ) {

                    $empleado_valido = true;
                    break;
                }
            }

            if (!$empleado_valido) {

                option_invalid();
                continue;
            }

            break;
        }

        if ($contador_disp == 0) {
            continue;
        }

        $servicios_escogidos[] = [
            "empleado" => $emp,
            "servicio" => $especialidad
        ];

        while (true) {

            $contador = 1;

            foreach ($diasSemana as $dia) {

                echo "(" .
                    $contador .
                    ") " .
                    $dia .
                    "\n";

                $contador++;
            }

            echo "\n=================================================================\n\n";

            $dia_seleccionado = readline(
                "Ingrese el número del día de la semana: "
            );

            if (!is_numeric($dia_seleccionado)) {

                option_invalid();
                continue;
            }

            $dia_seleccionado = (int) $dia_seleccionado;

            if (
                $dia_seleccionado < 1 ||
                $dia_seleccionado > count($diasSemana)
            ) {

                option_invalid();
                continue;
            }

            break;
        }

        while (true) {

            echo "=================================================================\n";
            echo "                 DIGITE LA HORA DE LA CITA                       \n";
            echo "=================================================================\n\n";

            $hora_inicio = readline(
                "Digite la hora de la cita escogida (8-12 o 14-18): "
            );

            if (!is_numeric($hora_inicio)) {

                option_invalid();
                continue;
            }

            $hora_inicio = (int) $hora_inicio;

            if (
                ($hora_inicio >= 8 && $hora_inicio <= 12) ||
                ($hora_inicio >= 14 && $hora_inicio <= 18)
            ) {

                $cont_h = 0;
                $horas = 0;



                foreach ($servicios as $s) {

                    if ($especialidad == $s["id"]) {

                        $horas = $s["duracion"];
                        $cont_h++;

                        break;
                    }
                }

                if ($cont_h != 0) {

                    if ($hora_inicio <= 12) {

                        if (($hora_inicio + $horas) <= 12) {

                            echo "Cita registrada disponible\n\n";
                            break;

                        } else {

                            echo "Horas muy largas tiene que agendar mas temprano\n\n";
                        }

                    } else if (
                        $hora_inicio >= 14 &&
                        $hora_inicio <= 18
                    ) {

                        if (($hora_inicio + $horas) <= 18) {

                            echo "Cita registrada disponible\n\n";
                            break;

                        } else {

                            echo "Horas de servicio muy largas (" .
                                $horas .
                                " Horas) tiene que agendar mas temprano\n\n";
                        }
                    }
                }

            } else {

                option_invalid();
            }
        }

        $cita = [
            "cliente" => $nombre,
            "cita" => [],
            "dia" => $diasSemana[$dia_seleccionado - 1],
            "hora_inicio" => $hora_inicio,
            "total" => 0
        ];

        while (true) {

            $otra_cita = readline(
                "\n¿Desea agregar otra cita? (s/n): "
            );

            switch (strtolower($otra_cita)) {

                case "s":

                    break 2;

                case "n":

                    $cita["cita"] = $servicios_escogidos;

                    echo "Cita registrada disponible\n\n";
                    echo "Cita registrada con éxito\n\n";

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

    $citas[] = $cita;
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

    $op = readline(
        "Ingrese el número de la opción: "
    );

    $op = strtolower($op);

    switch ($op) {

        case "1":

            registrar_empleado(
                $servicios,
                $empleados,
                $contador_empleado,
                $contador_dp
            );

            echo "Cantidad de empleados registrados: ";
            echo count($empleados) . "\n";

            break;

        case "2":

            registrar_cita(
                $servicios,
                $empleados,
                $citas,
                $diasSemana,
                $contador_dp
            );

            break;

        case "3":

            total_facturado(
                $empleados,
                $citas,
                $servicios
            );

            break;

        case "4":

            servicio_mas_solicitado(
                $citas,
                $servicios
            );

            break;

        case "5":

            agenda_por_dia(
                $citas,
                $diasSemana,
                $servicios,
                $empleados
            );

            break;

        case "6":

            break;

        case "7":

            liquidacion_comisiones(
                $empleados,
                $citas,
                $servicios
            );

            break;

        case "8":

            $es_activo = false;

            echo "\n<===                 Saliendo del programa...                  ===>\n\n";

            break;

        case "dp":

            datos_prueba(
                $empleados,
                $empleados_dp,
                $citas,
                $citas_dp,
                $contador_dp
            );

            break;

        case "md":

            show_data(
                $empleados,
                $citas
            );

            break;

        default:

            option_invalid();

            break;
    }
}
