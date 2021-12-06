@extends('layout')

@section('contenidoPrincipal')

    <section>
            <h2 align="center">Registrarme</h2>
            <form name="registrarUsuario-form" class="registrarUsuario-form" action="" method="post">
                @csrf
                <table align="center">
                    <tr>
                        <td>
                            <input name="username" type="username" class="input username" placeholder="Usuario del usuario" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="mail" type="text" class="input email" placeholder="Mail del usuario" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="password" type="password" class="input password" placeholder="Contraseña del usuario" required/>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input type="submit" name="submit" value="Registrar" class="button"/>
                        </td>
                    </tr>
                </table>
            </form>
    </section>

@endsection