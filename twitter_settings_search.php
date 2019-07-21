<?php

class TwitterSettingsSearchWindow extends GtkWindow
{
	public $twitter = null;

	function __construct( $twitter )
	{
		echo "2OK-1";
		parent::__construct(Gtk::WINDOW_TOPLEVEL);

		$this->twitter = $twitter;
		$this->set_size_request( 480, 600 );
		$this->set_title( 'Searches' );
		$this->connect( 'show', array( $this, 'onShow' ) );

		$mainVBox = new GtkBox(GtkOrientation::VERTICAL);
		$this->add( $mainVBox );

		$sw = new GtkScrolledWindow();
		// $sw->set_property( 'hscrollbar-policy', GtkPolicyType::NEVER );
		$sw->set_policy(GtkPolicyType::NEVER, GtkPolicyType::NEVER);
		$mainVBox->pack_start( $sw, true, true , 0);

		$this->filtersVbox = new GtkBox(GtkOrientation::VERTICAL);
		$sw->add( $this->filtersVbox );

		$addHBox = new GtkBox(GtkOrientation::HORIZONTAL);
		$mainVBox->pack_start( $addHBox, false, false , 0);

		$label = new GtkLabel( 'Add: ' );
		$addHBox->pack_start($label, false, false, 0);

		$this->entry = new GtkEntry();
		$addHBox->pack_start( $this->entry, true, true , 0);

		$this->addButton = new GtkToolButton("");
		$this->addButton->set_icon_name("gtk-add");
		$this->addButton->set_label( 'Add' );
		$this->addButton->connect( 'clicked', array( $this, 'addFilter') );
		// $this->addButton->set_property( 'width-request', 50 );
		// $this->addButton->set_property( 'height-request', 50 );
		// $this->addButton->set_property( 'can-focus', true );
		$addHBox->pack_start( $this->addButton, false, false , 0);

		$tb = new GtkToolbar();
		$mainVBox->pack_start( $tb, false, false , 0);
		$tb->set_show_arrow(false);
		// $tb->set_property( 'toolbar-style', Gtk::TOOLBAR_BOTH );
		// $tb->set_property( 'icon-size', 6 );
		$this->closeButton = new GtkToolButton("");
		$this->closeButton->set_icon_name("gtk-ok");
		$this->closeButton->set_label( 'Ok' );
		$this->closeButton->connect( 'clicked', array( $this, 'close' ) );
		// $this->closeButton->set_property( 'can-focus', true );
		$tb->insert( $this->closeButton, -1 );

		echo "2OK-2";

	}

	function onShow($wiget)
	{
		echo "2OK";
		$this->closeButton->grab_focus();
		$this->reloadSearches();
	}

	function close()
	{
		echo "2OK1";
		$this->hide_all();
	}

	function delete( $a, $n )
	{
		echo "2OK2";
		$this->twitter->delSearch( $n );
		$this->reloadSearches();
	}

	function addFilter()
	{
		echo "2OK3";
		$text = $this->entry->get_text();
		$text = trim( $text );
		if ( strlen( $text ) > 0 )
		{
			$this->twitter->addSearch( $text );
			$this->entry->set_text( '' );
			$this->reloadSearches();
			$this->addButton->grab_focus();
		}
	}

	function reloadSearches()
	{
		echo "2OK4";
		if ( !$this->twitter )
		{
			return;
		}
		$searches = $this->twitter->fetchSearches();
		$children = $this->filtersVbox->get_children();
		foreach ( $children as $child )
		{
			$this->filtersVbox->remove( $child );
		}

		foreach ( $searches as $search )
		{
			$box = new GtkHbox();

			$this->delButton = GtkToolButton::new_from_stock( Gtk::STOCK_DELETE );
			$this->delButton->set_label( 'Add' );
			$this->delButton->connect( 'clicked', array( $this, 'delete' ), $search );
			// $this->delButton->set_property( 'width-request', 50 );
			// $this->delButton->set_property( 'height-request', 50 );
			$this->delButton->show();
			$box->pack_start( $this->delButton, false, false , 0);

			$lbl = new GtkLabel( $search );
			$box->pack_start( $lbl, true, true , 0);

			$this->filtersVbox->pack_start( $box, false, false , 0);
		}
		$this->show_all();
	}
}
