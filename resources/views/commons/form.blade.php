                <div class="form-group">
                    {!! Form::label('contact_name','氏名') !!}
                    {!! Form::text('contact_name',null,['class'=>'form-control','align'=>'center']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('contact_tel','電話番号') !!}
                    {!! Form::text('contact_tel',null,['class'=>'form-control','placeholder'=>'ハイフン(-)なし']) !!}
                </div>
 
                 <div class="form-group">
                    {!! Form::label('address','住所') !!}
                    {!! Form::text('address',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('postal_code','郵便番号') !!}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">〒</span>
                        </div>
                        {!! Form::text('postal_code',null,['class'=>'form-control','placeholder'=>'ハイフン(-)なし']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('age','築年数') !!}
                    <div class="input-group">
                        {!! Form::text('age',null,['class'=>'form-control']) !!}
                        <div class="input-group-append">
                            <span class="input-group-text">年</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('price','価格') !!}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">￥</span>
                        </div>
                        {!! Form::text('price',null,['class'=>'form-control']) !!}
                        <div class="input-group-append">
                            <span class="input-group-text">円</span>
                    　　</div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('picture','写真URL') !!}
                    {!! Form::text('picture',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('overview','概要') !!}
                    {!! Form::textarea('overview',null,['class'=>'form-control']) !!}
                </div>
                
                <div class="text-center">
                    {!! Form::submit('登録',['class'=>'btn btn-primary col-4']) !!}
                </div>