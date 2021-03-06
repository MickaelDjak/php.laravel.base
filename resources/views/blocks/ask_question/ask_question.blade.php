<div class="row">
    <div class="small-12 medium-6 column ">
        <div class="gnc-form-box-info-graph">
            <img src="{{url('img/undraw/undraw_faq_rjoy.svg')}}" alt="Kiwi standing on oval"/>
        </div>
    </div>

    <div class="small-12 medium-6 column ">
        <h2 class="gnc-form-box-title"></h2>
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-12 cell">
                    <label for="name">{{ __('Имя') }}</label>
                    <input class="gnc-form-box-input" id="name" type="text" name="name" required/>
                </div>

                <div class="medium-12 cell">
                    <label for="email">{{ __('E-Mail') }}</label>
                    <input class="gnc-form-box-input" id="email" type="email" required autocomplete="email">
                </div>

                <div class="medium-12 cell">
                    <label for="question">{{ __('Вопрос') }}</label>
                    <textarea class="gnc-form-box-input" id="question"></textarea>
                </div>

                <div class="medium-12 cell">
                    <button type="submit" class="button"> Задать вопрос</button>
                </div>
            </div>
        </div>
    </div>
</div>
