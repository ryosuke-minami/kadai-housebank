                <div class="form-group">
                    {!! Form::label('contact_name','氏名') !!}
                    {!! Form::text('contact_name',null,['class'=>'form-control']) !!}
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
                    {!! Form::text('postal_code',null,['class'=>'form-control','placeholder'=>'ハイフン(-)なし']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('age','築年数') !!}
                    {!! Form::text('age',null,['class'=>'form-control','placeholder'=>'値のみを入力']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('price','価格') !!}
                    {!! Form::text('price',null,['class'=>'form-control','placeholder'=>'値のみを入力']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('picture','写真URL') !!}
                    {!! Form::text('picture',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('overview','概要') !!}
                    {!! Form::textarea('overview',null,['class'=>'form-control']) !!}
                </div>
                     
                {!! Form::submit('登録',['class'=>'btn btn-primary']) !!}