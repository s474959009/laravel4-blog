<?php
	$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);

	$trans = $environment->getTranslator();
?>

<?php if ($paginator->getLastPage() > 1): ?>
		<?php
			echo $presenter->getPrevious($trans->trans('pagination.previous'));

			echo $presenter->getNext($trans->trans('pagination.next'));
		?>
<?php endif; ?>
