<div id="top-search" class="top-search top-search-page">
	<div class="container">
		<div class="col-sm-12">
			
			<form method="get" action="<?= home_url() . '/imoveis' ?>" class="top-search-form top-search-form-page">
				
				<div class="col-sm-12">					
					<input type="checkbox" <?= (isset($_GET['especial'])) ? 'checked="checked"' : null ?> name="especial" class="sr-only"/>
					<div class="checkbox-big <?= (isset($_GET['especial'])) ? 'checked' : null ?>"></div>
					
					<span>Exclusividade e<br /> imóveis em exposição</span>
					
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-12 top-search-items">
					<?php foreach ($searchFieldsPage as $id => $fields) : ?>
					<div class="col-sm-<?= $fields['sm'] ?>">
						<select id="<?= str_replace('[]', '', $id); ?>" name="<?= $id; ?>" <?= ($fields['multi']) ? 'multiple="multiple"' : null ?>>
							<?php 
							foreach ($fields['options'] as $key => $value) :
								$selected = null;
								
								if ($fields['multi']) :
									// limpo o pai
									$parent = str_replace('[]', '', $id);
									
									// verifico se tentou buscar e se é array mesmo
									if (isset($_GET[$parent]) && is_array($_GET[$parent])) :
										// passo por todas opções
										// se a opção existir então eu a seleciono
										foreach ($_GET[$parent] as $sopt) :
											if ($key == $sopt) :
												$selected = 'selected="selected"';
											endif;
										endforeach;
									endif;
								else :
									// verifico se tentou buscar
									if (isset($_GET[$id]) && $_GET[$id] != '') :
										// se a opção estiver na URL então eu a seleciono
										if ($key == $_GET[$id]) :
											$selected = 'selected="selected"';
										endif;
									endif;
								endif;
							?>
								<option value="<?= $key; ?>" <?= $selected; ?>><?= $value; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php endforeach; ?>
					
					<div class="col-sm-4">
						<input type="text" name="reference" placeholder="Código de referência" value="<?= (isset($_GET['reference'])) ? $_GET['reference'] : null ?>" />
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-2 top-search-button no-padding">
					<button type="reset" id="btn-reset" class="btn-default btn-top-search btn-gray" name="bt"><i class="fa fa fa-eraser">&nbsp;</i>Limpar</button>
				</div>
				<div class="col-sm-8"></div>
				<div class="col-sm-2 top-search-button text-right">
					<?php if (isset($_GET['oferta'])) {
						echo '<input type="hidden" name="oferta" value="1" />';
					} ?>
					<button type="submit" class="btn-default btn-top-search" name="bt"><i class="fa fa fa-search">&nbsp;</i>Buscar</button>
				</div>				
				<div class="clearfix"></div>
			</form>
			
		</div><!--.col-md-12-->
	</div><!--/.container-->
</div><!--/#top-search-->
