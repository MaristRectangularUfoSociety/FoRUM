<?php
class Index{
	 //done(ish)
	function list {
		$categories = travis->getMeAllTheCategories();

		$data = array(
			'categories' => $categories
			);

		loadView('nicksViewThatIWantToLoad', $categories);

	}
			

}
?>