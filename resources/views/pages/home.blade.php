@extends('layouts.default')
@section('head', 'Home')
@section('heading', 'Welcome, Here is your DashBoard')
@section('content')
 <!-- page content -->

 


 <section class="hero is-info welcome is-small">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Hello, {{ Auth::user()->name }}
            </h1>
            <h2 class="subtitle">
                I hope you are having a great day!
            </h2>
        </div>
        <br>
    <div class="tabs is-boxed is-centered main-menu" id="nav">
        <ul>
            <li data-target="pane-1" id="1">
                <a>
                    <span class="icon is-small"><i class="fa fa-image"></i></span>
                    <span>System Summary</span>
                </a>
            </li>
            <li data-target="pane-2" id="2" class="is-active">
                <a>
                    <span class="icon is-small"><i class="fab fa-paper"></i></span>
                    <span>How-to Guide</span>
                </a>
            </li>
            <li data-target="pane-3" id="3">
                <a>
                    <span class="icon is-small"><i class="fab fa-calender"></i></span>
                    <span>Team</span>
                </a>
            </li>
            <li data-target="pane-4" id="4">
                <a>
                    <span class="icon is-small"><i class="fa fa-film"></i></span>
                    <span>Video</span>
                </a>
            </li>
        </ul>
    </div>

</div>
</section>
    <div class="tab-content">
        <div class="tab-pane" id="pane-1" class="level">
            <section class="info-tiles">
                <div class="tile is-ancestor has-text-centered">
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">114</p>
                            <p class="subtitle">Mines in System </p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">8</p>
                            <p class="subtitle">Number of Plants in Production</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">2000g</p>
                            <p class="subtitle">Total Gold Produced</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">5</p>
                            <p class="subtitle">Number of Reports Generated</p>
                        </article>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane" id="pane-3">
            <div class="columns">
                <div class="container ">
                    <div class="columns">
                        <div class="column">
                            <article class="media">
                                <div class="media-left">
                                    <i class="fab fa-github-square fa-4x"></i>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong>Tension Hlantini</strong>
                                            <br> Department Manager
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-left">
                                    <i class="fab fa-empire fa-4x"></i>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong>Nkululi Ncube</strong>
                                            <br> Geological Services
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="column">
                            <article class="media">
                                <div class="media-left">
                                    <i class="fab fa-ravelry fa-4x"></i>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong>Anath Phiri</strong>
                                            <br> Mine Operations
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-left">
                                    <i class="fab fa-github-alt fa-4x"></i>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong>Sandra Ndlovu</strong>
                                            <br> Data Capture Clerk ╳
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="pane-4">
            <iframe src="https://player.vimeo.com/video/261794608" width="640" height="360" class="video"></iframe>
        </div>
        <div class="tab-pane is-active" id="pane-2">
            <div class="content">
                <h1>Hello To This Short Tutorial</h1>
                <p>We are going to shortly see how this system works. Part by Part. I will fill this in later</p>
                <h2>Home Page</h2>
                <p>Curabitur accumsan turpis pharetra <strong>augue tincidunt</strong> blandit. Quisque condimentum maximus mi, sit amet commodo arcu rutrum id. Proin pretium urna vel cursus venenatis. Suspendisse potenti. Etiam mattis sem rhoncus lacus dapibus facilisis. Donec at dignissim dui. Ut et neque nisl.</p>
                <ul>
                    <li>In fermentum leo eu lectus mollis, quis dictum mi aliquet.</li>
                    <li>Morbi eu nulla lobortis, lobortis est in, fringilla felis.</li>
                    <li>Aliquam nec felis in sapien venenatis viverra fermentum nec lectus.</li>
                    <li>Ut non enim metus.</li>
                </ul>
                <h2>Miners Database</h2>
                <p>Quisque ante lacus, malesuada ac auctor vitae, congue <a href="#">non ante</a>. Phasellus lacus ex, semper ac tortor nec, fringilla condimentum orci. Fusce eu rutrum tellus.</p>
                <ol>
                    <li>Donec blandit a lorem id convallis.</li>
                    <li>Cras gravida arcu at diam gravida gravida.</li>
                    <li>Integer in volutpat libero.</li>
                    <li>Donec a diam tellus.</li>
                    <li>Aenean nec tortor orci.</li>
                    <li>Quisque aliquam cursus urna, non bibendum massa viverra eget.</li>
                    <li>Vivamus maximus ultricies pulvinar.</li>
                </ol>
            <blockquote>Ut venenatis, nisl scelerisque sollicitudin fermentum, quam libero hendrerit ipsum, ut blandit est tellus sit amet turpis.</blockquote>
            <p>Quisque at semper enim, eu hendrerit odio. Etiam auctor nisl et <em>justo sodales</em> elementum. Maecenas ultrices lacus quis neque consectetur, et lobortis nisi molestie.</p>
            <p>Sed sagittis enim ac tortor maximus rutrum. Nulla facilisi. Donec mattis vulputate risus in luctus. Maecenas vestibulum interdum commodo.</p>
            <dl>
                <dt>Web</dt>
                <dd>The part of the Internet that contains websites and web pages</dd>
                <dt>HTML</dt>
                <dd>A markup language for creating web pages</dd>
                <dt>CSS</dt>
                <dd>A technology to make HTML look better</dd>
            </dl>
            <p>Suspendisse egestas sapien non felis placerat elementum. Morbi tortor nisl, suscipit sed mi sit amet, mollis malesuada nulla. Nulla facilisi. Nullam ac erat ante.</p>
            <h4>Fourth level</h4>
            <p>Nulla efficitur eleifend nisi, sit amet bibendum sapien fringilla ac. Mauris euismod metus a tellus laoreet, at elementum ex efficitur.</p>
                                <pre>
                                                                                        &lt;!DOCTYPE html&gt;
                                                                                        &lt;html&gt;
                                                                                          &lt;head&gt;
                                                                                            &lt;title&gt;Hello World&lt;/title&gt;
                                                                                          &lt;/head&gt;
                                                                                          &lt;body&gt;
                                                                                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra nec nulla vitae mollis.&lt;/p&gt;
                                                                                          &lt;/body&gt;
                                                                                        &lt;/html&gt;
            </pre>
            <p>Maecenas eleifend sollicitudin dui, faucibus sollicitudin augue cursus non. Ut finibus eleifend arcu ut vehicula. Mauris eu est maximus est porta condimentum in eu justo. Nulla id iaculis sapien.</p>
            <table>
                <thead>
                    <tr>
                        <th>One</th>
                        <th>Two</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Three</td>
                        <td>Four</td>
                    </tr>
                    <tr>
                        <td>Five</td>
                        <td>Six</td>
                    </tr>
                    <tr>
                        <td>Seven</td>
                        <td>Eight</td>
                    </tr>
                    <tr>
                        <td>Nine</td>
                        <td>Ten</td>
                    </tr>
                    <tr>
                        <td>Eleven</td>
                        <td>Twelve</td>
                    </tr>
                </tbody>
            </table>
            <p>Phasellus porttitor enim id metus volutpat ultricies. Ut nisi nunc, blandit sed dapibus at, vestibulum in felis. Etiam iaculis lorem ac nibh bibendum rhoncus. Nam interdum efficitur ligula sit amet ullamcorper. Etiam tristique, leo vitae porta faucibus, mi lacus laoreet metus, at cursus leo est vel tellus. Sed ac posuere est. Nunc ultricies nunc neque, vitae ultricies ex sodales quis. Aliquam eu nibh in libero accumsan pulvinar. Nullam nec nisl placerat, pretium metus vel, euismod ipsum. Proin tempor cursus nisl vel condimentum. Nam pharetra varius metus non pellentesque.</p>
            <h5>Fifth level</h5>
            <p>Aliquam sagittis rhoncus vulputate. Cras non luctus sem, sed tincidunt ligula. Vestibulum at nunc elit. Praesent aliquet ligula mi, in luctus elit volutpat porta. Phasellus molestie diam vel nisi sodales, a eleifend augue laoreet. Sed nec eleifend justo. Nam et sollicitudin odio.</p>
            <figure>
                <img src="https://bulma.io/images/placeholders/256x256.png" alt="">
                <img src="https://bulma.io/images/placeholders/256x256.png" alt="">
                <figcaption>
                Figure 1: Some beautiful placeholders
                </figcaption>
            </figure>
            <h6>Sixth level</h6>
            <p>Cras in nibh lacinia, venenatis nisi et, auctor urna. Donec pulvinar lacus sed diam dignissim, ut eleifend eros accumsan. Phasellus non tortor eros. Ut sed rutrum lacus. Etiam purus nunc, scelerisque quis enim vitae, malesuada ultrices turpis. Nunc vitae maximus purus, nec consectetur dui. Suspendisse euismod, elit vel rutrum commodo, ipsum tortor maximus dui, sed varius sapien odio vitae est. Etiam at cursus metus.</p>
        </div>
    </div>
</div>



           
 
@stop