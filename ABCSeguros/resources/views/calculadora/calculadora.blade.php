@extends('layouts.headerCurso')

@section('usuario')
    {{ $nombreUsuario }}
@endsection

@section('title', 'Calculadora')

@section('content')
    <br>
    <br>
    <section class="calculadora">
        <article class="calculadoraContable">
            <br>
            <h1>Calculadora Contable</h1>
            <br>
        </article>
        <article class="calculadoraFunc">
            <form action="{{ route('calcular') }}" method="post">
                @csrf
                <section>
                    <fieldset>
                        <div class="calc">
                            <label for="valor_contado">Valor
                                Contado:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <ul class="menu-principal22">
                                <li class="expanded">
                                    <a href="#"><iconify-icon icon="ph:question-bold" width="20"
                                            height="20"></iconify-icon></a>
                                    <ul class="menu311">
                                        <li class="leaf nombre-usuario">
                                            Representa el monto de dinero que se paga al contado o de manera inmediata.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <input type="number" name="valor_contado" required style="width: 210px;"><br><br>

                        <div class="calc">
                            <label for="interes">Tipo de Interés (nominal
                                anual):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <ul class="menu-principal22">
                                <li class="expanded">
                                    <a href="#"><iconify-icon icon="ph:question-bold" width="20"
                                            height="20"></iconify-icon></a>
                                    <ul class="menu311">
                                        <li class="leaf nombre-usuario">
                                            Representa la tasa de interés, donde se divide por 100 para convertir el valor
                                            proporcionado a una fracción decimal.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <input type="number" name="interes" required style="width: 210px;"><br><br>

                        <div class="calc">
                            <label for="fecha_inicial">Fecha
                                Inicial:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <ul class="menu-principal22">
                                <li class="expanded">
                                    <a href="#"><iconify-icon icon="ph:question-bold" width="20"
                                            height="20"></iconify-icon></a>
                                    <ul class="menu311">
                                        <li class="leaf nombre-usuario">
                                            Representa la fecha de inicio para algún cálculo financiero.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <input type="date" name="fecha_inicial" required style="width: 210px;"><br><br>

                        <div class="calc">
                            <label for="forma_carencia">Forma de
                                Carencia:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <ul class="menu-principal22">
                                <li class="expanded">
                                    <a href="#"><iconify-icon icon="ph:question-bold" width="20"
                                            height="20"></iconify-icon></a>
                                    <ul class="menu311">
                                        <li class="leaf nombre-usuario">
                                            "Sin pagos": Indica que durante el período de carencia no se realizan pagos de
                                            cuotas.
                                            <br>
                                            "Retraso": Indica que durante el período de carencia se retrasan los pagos.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <select name="forma_carencia" style="width: 230px;">
                            <option value="sin_pagos">Sin Pagos</option>
                            <option value="retraso">Retraso</option>
                        </select><br><br>
                    </fieldset>
                    <fieldset>
                        <div class="calc">
                            <label for="valor_nominal">Valor
                                Nominal:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <ul class="menu-principal22">
                                <li class="expanded">
                                    <a href="#"><iconify-icon icon="ph:question-bold" width="20"
                                            height="20"></iconify-icon></a>
                                    <ul class="menu311">
                                        <li class="leaf nombre-usuario">
                                            Es el valor nominal o principal de un préstamo, es decir, la cantidad total
                                            prestada
                                            antes de intereses.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <input type="number" name="valor_nominal" required style="width: 210px;"><br><br>
                        <div class="calc">
                            <label for="frecuencia">Frecuencia de
                                Pagos:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <ul class="menu-principal22">
                                <li class="expanded">
                                    <a href="#"><iconify-icon icon="ph:question-bold" width="20"
                                            height="20"></iconify-icon></a>
                                    <ul class="menu311">
                                        <li class="leaf nombre-usuario">
                                            Indica la frecuencia de los pagos. Si la frecuencia es 'mensual', se establece
                                            en
                                            12, de
                                            lo contrario, se establece en 1.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <select name="frecuencia" style="width: 230px;">
                            <option value="mensual">Mensual</option>
                            <option value="anual">Anual</option>
                        </select><br><br>
                        <div class="calc">
                            <label for="periodos_carencia">Periodos de
                                Carencia:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <ul class="menu-principal22">
                                <li class="expanded">
                                    <a href="#"><iconify-icon icon="ph:question-bold" width="20"
                                            height="20"></iconify-icon></a>
                                    <ul class="menu311">
                                        <li class="leaf nombre-usuario">
                                            Indica la cantidad de periodos durante el cual no se requiere el pago de la
                                            cuota.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <input type="number" name="periodos_carencia" value="0" style="width: 210px;"><br><br>


                    </fieldset>
                </section>
                <input type="submit" value="Calcular" style="width: 485px;">
            </form>

        </article>
    </section>
@endsection
