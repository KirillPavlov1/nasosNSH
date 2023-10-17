<div class="form-popup" onclick="closeForm()">
    <form action="{{ route('send-mail-recall') }}" class="form-container" onclick="buttonClick(event)" method="post" enctype="multipart/form-data">
        @csrf
        <div class="formBack__wrapper">
            <img class="backApp">
            <div class="fieldsForm">
                <p class="nameForm">
                    Свяжитесь с нами
                </p>
                <div class="fieldsClient">
                    <div class="dataClient">
                        <input type="text" placeholder="Имя" name="name" required>
                        <input type="email" placeholder="Почта" name="email" required>
                        <input type="tel" placeholder="Телефон" name="phone" required>
                    </div>
                    <textarea rows="5" name="text" placeholder="Сообщение&#10;(ответим на все ваши вопросы)"></textarea>                </div>
                    {{-- <div class="buttonForm">
                        ОТПРАВИТЬ
                    </div> --}}
                    
                    <button type="submit" class="buttonForm" onclick="capch(event)">ОТПРАВИТЬ</button>
                </div>
            </div>
        </div>
    </form>
</div>