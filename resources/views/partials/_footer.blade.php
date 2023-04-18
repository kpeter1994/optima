<footer class="bd-footer bg-body-tertiary bg-dark ">
    <div class="container pt-4 pt-md-5 px-4 px-md-3 text-body-secondary">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <a class="d-inline-flex align-items-center mb-2 text-body-secondary text-decoration-none" href="/" aria-label="Bootstrap">
                    @include('partials._logo')
                </a>
                <ul class="list-unstyled small">
                    <li class="mb-2">Iratkozz fel hírlevelünkre, hogy ne maradj le a legújabb tartalmakról, hírekről!</li>
                    <li class="mb-2">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-secondary text-white" id="basic-addon1"><i class="fa-regular fa-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="E-mail-cím" aria-label="Username" aria-describedby="basic-addon1" spellcheck="false" data-ms-editor="true">
                        </div>
                    </li>
                    <li class="mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Az <a href="">Adatvédelmi szabályzatot</a> megértettem és elfogadom. Ennek megfelelően kifejezetten hozzájárulok a fenti személyes adataim kezeléséhez a célból, hogy az Optima by Dudits hírlevelek és egyéb közvetlen üzletszerzési célú, illetve marketingcélú levelek küldéséhez használja azokat.
                            </label>
                        </div>
                    </li>
                    <li class="mb-2"><button class="btn btn-secondary btn-sm">Feliratkozom</button></li>
                </ul>
            </div>
            <div class="col-6 col-lg-3 offset-lg-1 mb-3">
                <span class="fs-5 fw-bolder">Hasznos linkek</span>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/">Csapatunk</a></li>
                    <li class="mb-2"><a href="/">Rólunk mondták</a></li>
                    <li class="mb-2"><a href="/">Gyakori kérdések</a></li>
                    <li class="mb-2"><a href="/">Általános szerződési feltételek</a></li>
                    <li class="mb-2"><a href="/">Adatvédelmi szabályzat</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-4 mb-1 border-start border-1 border-light list-unstyled">
                <div class="mb-3">
                    <span class="fs-5 fw-bolder d-block">Közösségi média</span>
                    <a class="text-decoration-none text-light" href=""><i class="fa-brands fa-facebook me-3"></i> Dudits Dénes Hivatalos Facebook-oldala</a>
                </div>
                <div class="mb-3">
                    <span class="fs-5 fw-bolder d-block">Partnereink</span>
                    <img class="img-fluid" src="{{asset('/img/barion-card-strip-intl.svg')}}" alt="">
                </div>

                <div>
                    <p>© 2023 – OPTIMA by Dudits <br> Minden jog fenntartva!</p>
                </div>
            </div>
        </div>
    </div>
</footer>
