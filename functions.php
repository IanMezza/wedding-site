<?php
/**
 * Jack & Rose Child theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Jack_Rose
 */

/**
 * Load Child Theme styles.
 */
function jackrose_child_scripts() {
	$theme_data = wp_get_theme();
	wp_enqueue_style( 'jackrose-child', get_stylesheet_uri(), array( 'jackrose' ), $theme_data->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'jackrose_child_scripts', 20 );

/**
 * Load Child Theme languages.
 */
function jackrose_child_after_setup_theme() {
	load_child_theme_textdomain( 'jackrose', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'jackrose_child_after_setup_theme' );

/**
 * Add new Social Icons.
 * All social media icons available here: http://fontawesome.io/icons/#brand.
 * Copy paste the icon slug without "fa-", e.g. "fa-skype" -> "skype".
 * Uncomment lines below and edit the $links array.
 */
 function jackrose_child_social_media( $links ) {
 	$links['skype'] = __( 'Skype', 'jackrose' );
 	$links['vk'] = __( 'VKontakte', 'jackrose' );
 	return $links;
 }
 add_filter( 'jackrose_user_links', 'jackrose_child_social_media' );
 add_filter( 'jackrose_social_media', 'jackrose_child_social_media' );
 add_filter( 'singlestroke_social_media', 'jackrose_child_social_media' );

/**
 * WHITE LABEL: Custom theme dashboard page.
 * Uncomment lines below and edit the $html variable to your liking.
 */
// define( 'SINGLESTROKE_WHITE_LABEL', true );




if ( ! function_exists( 'jackrose_hero_logo' ) ) :
    /**
     * Prints HTML with meta information for hero section logo.
     */
    function jackrose_hero_logo() {
        ?>
        <div id="hero-logo" class="hero-logo">
            <div class="wrapper" style="display: flex; justify-content: center; align-items: center;">
                <section class="container">
                    <div>
                        <p class="text-nb">NUESTRA BODA</p>
                    </div>
                    <div>
                        <h1 class="text-n">ARELY & IAN</h1>
                    </div>
                    <div class="img-container">
                        <Img class="separador" src="https://invitacion.mx/wp-content/uploads/2020/09/ornamen-18.png"></Img>
                    </div>
                    <div class="text-p">
                        <p>Te invitamos a compartir <br>la alegría de unir nuestras vidas</p>
                    </div>
                </section>



                <?php
                $button_text = jackrose_get_theme_mod( 'hero_button_text' );
                $button_href = jackrose_get_theme_mod( 'hero_button_href' );
                $invitados = arrayInvitados();
                ?>

                <?php if ( ! empty( $_REQUEST['id'] ) && array_key_exists($_REQUEST['id'], $invitados) ) : ?>
                    <div class="hero-action">
                        <a id="boton-ver-pases" href="<?php echo esc_url( $button_href ); ?>" class="hero-button"><span><?php echo esc_html( $button_text ); ?></span><i class="fa fa-angle-double-down"></i></a>
                    </div>
                <?php endif; ?>
            </div> <!-- wrapper -->

            <style>
                section{
                    text-align: center;
                }
                .text-nb{
                    font-size: 13px;
                    font-weight: 600;
                    letter-spacing: 5px;
                    color: white;
                }
                .text-n{
                    font-size: 60px;
                    font-weight: 300;
                    letter-spacing: 6px;
                    color: white !important;
                }


                .img-container{
                    margin: 0px 0px -10px 0px;
                    display: flex;
                    justify-content: center;
                }

                .text-p{
                    font-weight: 300;
                    font-size: 20px;
                    line-height: 33px;
                    color: white;
                    margin-top: 15px;
                }

                .separador{
                    width: 200px !important;
                }
            </style>
        </div><!-- .hero-logo -->
        <?php
    }
endif;


function arrayInvitados()
{
//  3
    return array(
        '5ebe09b64a' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Meza Zamora',
            'adultos' => '3 Adultos',
            'niños' => ''
        ),
// 4
        'bcf6f640c8' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Olvera Meza',
            'adultos' => '2 Adultos',
            'niños' => ' 1 Niño'
        ),
// 5
        'e2k4esa8lq' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Olvera Trujillo ',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
// 6
        'b15db42edc' => array(
            'tratamiento' => 'Invitado',
            'nombre' => 'Ariel Zamora Amador',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//7
        '0ca8fde609' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Villegas Zamora',
            'adultos' => '4 Adultos',
            'niños' => '1 Niño'
        ),
//8
        '8bdd46a41f' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Zamora Rodríguez',
            'adultos' => '3 Adultos',
            'niños' => '1 niño'
        ),
//9
        'c8f51c9cef' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Zamora Zamora',
            'adultos' => '3 Adultos',
            'niños' => '1 Niño'
        ),
//10
        '9dd79667ed' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Zamora Olvera',
            'adultos' => '3 Adultos',
            'niños' => ''
        ),
//11
        '674ba7bf91' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Zamora Marín',
            'adultos' => '1 Adulto',
            'niños' => '1 Niño'
        ),
//12
        'a6134c33a3' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Zamora López',
            'adultos' => '3 Adultos',
            'niños' => ''
        ),
//13
        'd4ade3314a' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Hernández Zamora',
            'adultos' => '2 Adultos',
            'niños' => '1 Niño'
        ),
//14
        '4f09ba2e45' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Zamora Amador',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//15
        'bda0626a6e' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Grande Meza',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//16
        'd943295f32' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Grande Fernández',
            'adultos' => '2 Adultos',
            'niños' => '1 Niño'
        ),
//17
        '22d870d850' => array(
            'tratamiento' => '',
            'nombre' => 'César Grande Meza y familia',
            'adultos' => '2 Adultos',
            'niños' => '2 Niños'
        ),
//18
        'a2e4589ace' => array(
            'tratamiento' => '',
            'nombre' => 'Rogelio Grande Meza y familia',
            'adultos' => '4 Adultos',
            'niños' => '1 Niño'
        ),
//19
        '626a6ea16b' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Grande Meza',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//20
        '295f321f30' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Velez Grande',
            'adultos' => '3 Adultos',
            'niños' => ''
        ),
//21
        '70d8502739' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Grande Díaz',
            'adultos' => '3 Adultos',
            'niños' => ''
        ),
//22
        '2c56784105' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Lozano Grande',
            'adultos' => '2 Adultos',
            'niños' => '1 Niño'
        ),
//23
        '8fcb6835d7' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Pedraza Meza',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//24
        '418a4d5b9e' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Velasco Pedraza',
            'adultos' => '4 Adultos',
            'niños' => '1 Niño'
        ),
//25
        '40af83f89d' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Pedraza Cruz',
            'adultos' => '2 Adultos',
            'niños' => '2 Niños'
        ),
//26
        'fdb336e566' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Pedraza Lechuga',
            'adultos' => '2 Adultos',
            'niños' => '2 Niños'
        ),
//27
        '6a0596b198' => array(
            'tratamiento' => 'Invitada',
            'nombre' => 'Viridiana Pedraza Meza',
            'adultos' => '1 Adulto',
            'niños' => ''
        ),
//28
        'bfa28c0ae4' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Ortega Pedraza', // Karolyna Pedraza Meza
            'adultos' => '2 adultos',
            'niños' => '2 niños'
        ),
//29
        'b6e5274ac7' => array(
            'tratamiento' => '',
            'nombre' => 'Alejandro Hernández Meza y familia',
            'adultos' => '5 Adultos',
            'niños' => ''
        ),
//30
        '550ea454a7' => array(
            'tratamiento' => '',
            'nombre' => 'Abraham Meza Lima y familia',
            'adultos' => '3 Adultos',
            'niños' => ''
        ),
//31
        '1c9253ee8e' => array(
            'tratamiento' => 'Familia',
            'nombre' => '',
            'adultos' => '0 Adultos',
            'niños' => ''
        ),
//32
        '1c8ba9ff4e94ecf' => array(
            'tratamiento' => 'Familia',
            'nombre' => '',
            'adultos' => '0 Adultos',
            'niños' => ''
        ),
//33
        '0b544d2beb' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Ortega Díaz',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//34
        '723ef9eb2k' => array(
            'tratamiento' => 'Invitado',
            'nombre' => 'Iván Cruz Amador',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//35
        '2ed396e1e8' => array(
            'tratamiento' => 'Familia',
            'nombre' => '',
            'adultos' => '0 Adultos',
            'niños' => ''
        ),
//36
        '8f1c5707a5' => array(
            'tratamiento' => 'Familia',
            'nombre' => '',
            'adultos' => '2 Adultos',
            'niños' => '2 Niños'
        ),
//37
        '56d4deb6a2' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Fuentes López',
            'adultos' => '2 Adultos',
            'niños' => '2 Niños'
        ),
//38
        'bb4f8f7b2b' => array(
            'tratamiento' => 'Familia',
            'nombre' => '',
            'adultos' => '4 Adultos',
            'niños' => '4 Niños'
        ),
//39
        '0a6136c7d5' => array(
            'tratamiento' => 'Familia',
            'nombre' => '',
            'adultos' => '2 Adultos',
            'niños' => '2 Niños'
        ),
//40
        '6644dc5701' => array(
            'tratamiento' => 'Invitado',
            'nombre' => 'Humberto Morales Cortés',
            'adultos' => '1 Adulto',
            'niños' => ''
        ),
//41
        'e1b097d9a7' => array(
            'tratamiento' => 'Invitado',
            'nombre' => '',
            'adultos' => '2 Adultos',
            'niños' => '2 Niños'
        ),
//42
        'c93195bdaa' => array(
            'tratamiento' => 'Invitado',
            'nombre' => 'Gustavo Carrillo',
            'adultos' => '1 Adulto',
            'niños' => ''
        ),
//43
        'ef7966590f4' => array(
            'tratamiento' => 'Invitado',
            'nombre' => 'Carlos Solares',
            'adultos' => '1 Adulto',
            'niños' => '1 Niño'
        ),
        // Arely
//44
        '3ba352e896' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Juárez Hernández',
            'adultos' => '3 Adultos',
            'niños' => ''
        ),
//45
        '03fabd50f0' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Flores Juárez ',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//46
        '0acb6819bd' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Juárez Sánchez',
            'adultos' => '4 Adultos',
            'niños' => '1 Niño'
        ),
//47
        '7bdb68339a' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Vázquez Hernández',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//48
        '183d5e63fb' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Vázquez Domínguez',
            'adultos' => '3 Adultos',
            'niños' => '1 Niño'
        ),
//49
        'bf45316e8f' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Vázquez Ramos',
            'adultos' => '3 Adultos',
            'niños' => ''
        ),
//50
        'f89767abba' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Vázquez Martínez',
            'adultos' => '2 Adultos',
            'niños' => '1 Niño'
        ),
//51
        'c4981825dd' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Hernández Robles',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//52
        'dd480612fa' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Hernández Hernández',
            'adultos' => '2 Adultos',
            'niños' => '1 Niño'
        ),
//53
        '7db8b77f83' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Rosas Hernández',
            'adultos' => '2 Adultos',
            'niños' => '2 Niños'
        ),
//54
        '40bed8916d' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Hernández Tadeo',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//55
        '3176670d02' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'León Robles',
            'adultos' => '4 Adultos',
            'niños' => '1 Niño'
        ),
//56
        '4452109c3d' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Hernández Sánchez',
            'adultos' => '3 Adultos',
            'niños' => ''
        ),
//57
        'de823e8f19' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Carrillo Hernández',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//58
        'fb148bc2f6' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Carrillo Hernández ',
            'adultos' => '1 Adulto',
            'niños' => '2 Niños'
        ),
//59
        '4a9ae9b451' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Carrillo Hernández ',
            'adultos' => '1 Adulto',
            'niños' => '1 Niño'
        ),
//60
        'dbe7f6d4f7' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Carrillo Hernández ',
            'adultos' => '3 Adultos',
            'niños' => ''
        ),
//61
        '6b68f032fc' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Hernández Plata',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//62
        'c7447afe98' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Fernández Hernández',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//63
        'ea01630e8d' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Hernández Plata',
            'adultos' => '5 Adultos',
            'niños' => ''
        ),
//64
        '4e8705a1b1' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Juárez Hernández',
            'adultos' => '3 Adultos',
            'niños' => '1 Niño'
        ),
//65
        '628df72a4a' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Sánchez Hernández',
            'adultos' => '4 Adultos',
            'niños' => ''
        ),
//66
        '973f3700a1' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Amador Hernández',
            'adultos' => '3 Adultos',
            'niños' => ''
        ),
//67
        '7h3c770r7' => array(
            'tratamiento' => 'Gorron',
            'nombre' => 'Héctor Amador',
            'adultos' => '1 Adulto',
            'niños' => ''
        ),
//68
        'dc58feb84b' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Amador Hernández',
            'adultos' => '3 Adultos',
            'niños' => ''
        ),
//69
        '8055078a2b' => array(
            'tratamiento' => 'Invitada',
            'nombre' => 'Eloina Amador Hernández',
            'adultos' => '3 Adultos',
            'niños' => ''
        ),
//70
        '321b7d2c38' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Cruz Amador',
            'adultos' => '4 Adultos',
            'niños' => ''
        ),
//71
        'a7c409efa1' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Amador Zamora',
            'adultos' => '4 Adultos',
            'niños' => ''
        ),
//72
        'fa18423217' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'García Amador',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//73
        'b0689b217a' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Zamora Mora',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//74
        '6d1251620b' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Zamora Calderón',
            'adultos' => '5 Adultos',
            'niños' => ''
        ),
//75
        '1494570eb0' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Amador Mora',
            'adultos' => '4 Adultos',
            'niños' => ''
        ),
//76
        '33e698b535' => array(
            'tratamiento' => 'Invitada',
            'nombre' => 'Areli Rodríguez Zárate',
            'adultos' => '4 Adultos',
            'niños' => ''
        ),
//77
        '5b7809f9de' => array(
            'tratamiento' => 'Invitado',
            'nombre' => 'Julio César Rodríguez Cruz',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//78
        '58feb84dbf' => array(
            'tratamiento' => 'Invitado',
            'nombre' => 'Sarit Cortez Alvarado',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//79
        '38t055gd07' => array(
            'tratamiento' => 'Invitada',
            'nombre' => 'Daniela Ramos Rojas',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//80
        '95a321b7d7' => array(
            'tratamiento' => 'Invitada',
            'nombre' => 'Jocelyn Zamora Pérez',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//81
        '896b8a7c40' => array(
            'tratamiento' => 'Invitada',
            'nombre' => 'Mardoña Santiago Rivas',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),

        // Enfrente

//82
        '9efa18217e' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Juan Amador Rodríguez',
            'adultos' => '1 Adulto',
            'niños' => ''
        ),
//83
        'fa54hg5a27' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Martínez Amador ',
            'adultos' => '3 Adultos',
            'niños' => ''
        ),
//84
        '1b2ee42e9b' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Álvarez Martínez',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//85
        '7e35e0c094' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Amador Lima',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
//86
        'b2edef89b2' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Carlos Amador Lima',
            'adultos' => '1 Adulto',
            'niños' => '1 Niño'
        ),
//87
        'dc1c8baf4e' => array(
            'tratamiento' => 'Invitado',
            'nombre' => 'Alfredo Amador Flores',
            'adultos' => '2 Adultos',
            'niños' => '1 Niño'
        ),
//88
        'ecf8ee4h45' => array(
            'tratamiento' => 'Invitada',
            'nombre' => 'Rubí Olvera Cortés',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),

        // Hector

        '7Ablfd9oa' => array(
            'tratamiento' => 'Invitado',
            'nombre' => 'Aldo Jesus Texis Fabian',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),

//        Segunda lista
        'efd9oa4h97' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Romero Hernández',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
        'ecf8baf4e9' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Fabián Zamora y familia',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
        'af4e9e42e' => array(
            'tratamiento' => 'Invitada',
            'nombre' => 'Arminda Hernández Camacho',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
        '1b2ee4c8ba' => array(
            'tratamiento' => 'Familia',
            'nombre' => 'Quintero Muñoz',
            'adultos' => '2 Adultos',
            'niños' => ''
        ),
        'a4h9e0c09' => array(
            'tratamiento' => 'Familia',
            'nombre' => '',
            'adultos' => '',
            'niños' => ''
        ),
    );
}

//saber el hash

$hash = '7Ablfd9oa';


if (array_key_exists($_REQUEST['id'], arrayInvitados())) {
    $treatment = arrayInvitados()[$_REQUEST['id']]['tratamiento'];
    $names = arrayInvitados()[$_REQUEST['id']]['nombre'];
    $adults = arrayInvitados()[$_REQUEST['id']]['adultos'];
    $kids = arrayInvitados()[$_REQUEST['id']]['niños'];
} else {
    $treatment = '';
    $names = '';
    $adults = '';
    $kids = '';
}




