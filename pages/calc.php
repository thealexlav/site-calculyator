    <!--Begin Jumbotron-->
    <div class="jumbotron my-5">
		<div class="container ">

    <!--Начало калькулятора-->
  			<div class="row ">
				<div class="col-sm-12">
				<!--Начало корпуса калькулятора-->
					<div class ="corpus bg-warning ">
						<!--Начало дисплея-->
					<div class="row p-1 mb-1">
						<div class="col-sm-12 ">
						<p class="display bg-dark  " id="displayInfo" >
							
						</p>
						</div>
					</div>
					<!--Конец дисплея-->
						<div class="row p-1">
							<div class="col-sm-12">
								<div class="keyboard bg-dark ">
									<!--начало 1 строки на клавиатуре -->
									<div class="row p-1">
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_oper btn-outline-secondary btn-block" data-toggle="tooltip" data-placement="right" title="Логарифм" onclick="calcLog()">LOG</button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_oper btn-outline-secondary btn-block" data-toggle="tooltip" data-placement="right" title="Квадратный корень" onclick="calcSqrt()"><i class="fas fa-square-root-alt"></i></button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_oper btn-outline-success btn-block" data-toggle="tooltip" data-placement="right" title="Возведение в степень" value="**"><i class="fas fa-superscript"></i></button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_oper btn-outline-success btn-block" data-toggle="tooltip" data-placement="right" title="Остаток от делания" value="%"><i class="fas fa-percentage"></i></button>
										</div>
									</div>
									<!--конец 1 строки на клавиатуре -->
			
									<!--начало 2 строки  на клавиатуре-->
									<div class="row p-1">
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_oper btn-outline-success btn-block"  data-toggle="tooltip" data-placement="right" title="Вычитание" value="-"><i class="fas fa-minus"></i></button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_oper btn-outline-success btn-block" data-toggle="tooltip" data-placement="right" title="Сложение" value="+"><i class="fas fa-plus"></i></button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_oper btn-outline-success btn-block" data-toggle="tooltip" data-placement="right" title="Деление" value="/"><i class="fas fa-divide"></i></button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_oper btn-outline-success btn-block" data-toggle="tooltip" data-placement="right" title="Умножение" value="*"><i class="fas fa-times"></i></button>
										</div>
									</div>
									<!--конец 2 строки  на клавиатуре-->
			
									<!--начало 3 строки  на клавиатуре-->
									<div class="row p-1">
										<div class="col-sm-3">
										<button type="button" class="btn btn_key_num btn-outline-primary btn-block" data-toggle="tooltip" data-placement="right" title="Цифра 7" value="7">7</button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_num btn-outline-primary btn-block" data-toggle="tooltip" data-placement="right" title="Цифра 8" value="8">8</button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_num btn-outline-primary btn-block" data-toggle="tooltip" data-placement="right" title="Цифра 9" value="9">9</button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_oper btn-outline-secondary btn-block" data-toggle="tooltip" data-placement="right" title="Открывающая Скобка" value="(">(</button>
										</div>
									</div>
									<!--конец 3 строки на клавиатуре -->
			
									<!--начало 4 строки на клавиатуре -->
									<div class="row p-1">
										<div class="col-sm-3">
										<button type="button" class="btn btn_key_num btn-outline-primary btn-block" data-toggle="tooltip" data-placement="right" title="Цифра 4" value="4">4</button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_num btn-outline-primary btn-block" data-toggle="tooltip" data-placement="right" title="Цифра 5" value="5">5</button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_num btn-outline-primary btn-block" data-toggle="tooltip" data-placement="right" title="Цифра 6" value="6">6</button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_oper btn-outline-secondary btn-block" data-toggle="tooltip" data-placement="right" title="Закрывающая скобка" value=")">)</button>
										</div>
									</div>
									<!--конец 4 строки  на клавиатуре-->
			
									<!--начало 5 строки  на клавиатуре-->
									<div class="row p-1">
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_num btn-outline-primary btn-block" data-toggle="tooltip" data-placement="right" title="Цифра 1" value="1">1</button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_num btn-outline-primary btn-block" data-toggle="tooltip" data-placement="right" title="Цифра 2" value="2">2</button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_num btn-outline-primary btn-block" data-toggle="tooltip" data-placement="right" title="Цифра 3" value="3">3</button>
										</div>
										<div class="col-sm-3">
											<button type="reset" class="btn btn_key_oper btn-outline-danger btn-block" data-toggle="tooltip" data-placement="right" title="Сброс" onclick="cleanValue()">AC</button>
										</div>
									</div>
									<!--конец 5 строки на клавиатуре-->
			
									<!--начало 6 строки на клавиатуре -->
									<div class="row p-1">
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_num btn-outline-primary btn-block" data-toggle="tooltip" data-placement="right" title="Цифра 0" value="0" >0</button>
										</div>
										<div class="col-sm-3">
											<button type="button" class="btn btn_key_oper btn-outline-secondary btn-block" data-toggle="tooltip" data-placement="right" title="Десятичная дробь" value=".">.</button>
										</div>
										<div class="col-sm-6">
											<button type="button" class="btn btn_key_oper btn-outline-danger btn-block"  data-toggle="tooltip" data-placement="right" title="Равно" onclick="calcValue(),getLastValue()"><i class="fas fa-equals"></i></button>
										</div>
									</div>
								<!--конец 6 строки на клавиатуре-->
								</div>
							</div>
						</div>
					</div>
				<!--Конец корпуса калькулятора-->
				</div>
			</div>
    <!--конец калькулятора-->

   
        <!--Начало таблицы-->
			<table class="table text-left  my-3 text-muted" id="tbl" >
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">История</th>
					</tr>
				</thead>
				<tbody id="history">
				</tbody>
			</table>
			<!--Конец таблицы-->
			<!--Начало кнопки очистить историю-->
			<button type="reset" class="btn btn_key_oper btn-outline-danger btn-block"  data-toggle="tooltip" data-placement="right" title="Очистить историю" onclick="cleanHistory()"><i class="fas fa-broom"></i>Очистить историю</button>
			<!--Конец кнопки очистить историю-->
		</div>
		
	</div>
	<!--End Jumborton-->

	<!--Начало анимации-->
	<div class="container my-5 ">
		<div class="row">
		<div class="col-sm-12">
			<img src="img/calc_5.jpg" alt="Calculator" id="calculate">
		</div>
		</div>
	</div>
	<!--Конец анимации-->
<!--<script>
document.addEventListener("DOMContentLoaded", function(){
	setInterval(animation, 10);
});
</script>-->