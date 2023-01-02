<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Olmo_Posts extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-posts';
    }

    public function get_title() {

        return esc_html__( 'Posts', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-image-box';
    }

    public function get_categories() {
        return [ 'olmo-all-elements' ];
    }

    protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
	
		$this->add_control(
			'number_of_posts',
			[
				'label' => esc_html__( 'Number of Posts', 'olmo' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 48,
				'step' => 1,
				'default' => 3,
			]
		);
		
		$this->add_control(
			'cateogries',
			[
				'label' => esc_html__( 'Select Categories', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'options' => $this->get_post_categories(),
				'label_block' => true,
				'multiple'		=> true,
			]			
		);
		
		$this->add_control(
			'order',
			[
				'label' => esc_html__( 'Order', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'DESC'  => esc_html__( 'DESC', 'olmo' ),
					'ASC' => esc_html__( 'ASC', 'olmo' ),
				],
			]
		);
		
		$this->add_control(
			'orderby',
			[
				'label' => esc_html__( 'Order By', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'date',
				'options' => [
					'title'  => esc_html__( 'Title', 'olmo' ),
					'date' => esc_html__( 'Date', 'olmo' ),
					'ID'  => esc_html__( 'ID', 'olmo' ),
					'name'  => esc_html__( 'Name', 'olmo' ),
					'rand' => esc_html__( 'Rand', 'olmo' ),
					'comment_count'  => esc_html__( 'Comment Count', 'olmo' ),
					'menu_order' => esc_html__( 'Menu Order', 'olmo' ),					
					'author' => esc_html__( 'Author', 'olmo' ),
				],
			]
		);

		$this->add_control(
			'description_show',
			[
				'label' => esc_html__( 'Show Description', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'comment_show',
			[
				'label' => esc_html__( 'Show Comments', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->end_controls_section();

		// Style Section //
		
		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->start_controls_tabs(
			'title_tabs'
		);
		
		$this->start_controls_tab(
			'title_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'olmo' ),
			]
		);
		
		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Title Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-post-txt .h5-md a' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'olmo' ),
			]
		);
		
		$this->add_control(
			'title_color_hover',
			[
				'label' => esc_html__( 'Title Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-1-post:hover .blog-post-txt .h5-md a' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .blog-post-txt .h5-md a',
			]
		);

        $this->add_responsive_control(
			'title_margin',
			[
				'label' =>esc_html__( 'Margin', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .blog-post-txt .h5-md' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
      $this->end_controls_section();
	  
	  // Content Style Section //
		
		$this->start_controls_section(
			'style_Content_section',
			[
				'label' => esc_html__( 'Content', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'content_color',
			[
				'label' => esc_html__( 'Content Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-post-txt .p-lg' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .blog-post-txt .p-lg',
			]
		);

        $this->add_responsive_control(
			'content_margin',
			[
				'label' =>esc_html__( 'Margin', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .blog-post-txt .p-lg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
      $this->end_controls_section();
	  
	  // Meta Style Section //
		
		$this->start_controls_section(
			'style_meta_section',
			[
				'label' => esc_html__( 'Meta', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->start_controls_tabs(
			'meta_tabs'
		);
		
		$this->start_controls_tab(
			'meta_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'olmo' ),
			]
		);
		
		$this->add_control(
			'meta_color',
			[
				'label' => esc_html__( 'Meta Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .post-meta a' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'meta_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'olmo' ),
			]
		);
		
		$this->add_control(
			'meta_color_hover',
			[
				'label' => esc_html__( 'Meta Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-1-post:hover .post-meta a' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'meta_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .post-meta a',
			]
		);

        $this->add_responsive_control(
			'meta_margin',
			[
				'label' =>esc_html__( 'Margin', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .post-meta' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
      $this->end_controls_section();
	  
	  // Category Style Section //
		
		$this->start_controls_section(
			'category_section',
			[
				'label' => esc_html__( 'Category', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->start_controls_tabs(
			'category_tabs'
		);
		
		$this->start_controls_tab(
			'category_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'olmo' ),
			]
		);
		
		$this->add_control(
			'category_color',
			[
				'label' => esc_html__( 'Category Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .p-md.post-tag a' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'category_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'olmo' ),
			]
		);
		
		$this->add_control(
			'category_color_hover',
			[
				'label' => esc_html__( 'Category Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .blog-1-post:hover .p-md.post-tag a' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'category_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .p-md.post-tag a',
			]
		);

        $this->add_responsive_control(
			'category_margin',
			[
				'label' =>esc_html__( 'Margin', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .p-md.post-tag' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
      $this->end_controls_section();
		
    }

    protected function render( ) { 
        $settings = $this->get_settings_for_display();
		
		$args = array(
		'posts_per_page' => $settings['number_of_posts'],
		'order'          => $settings['order'],
		'orderby'        => $settings['orderby'],
		'post__not_in' => get_option( 'sticky_posts' )
		);
		
		if(!empty($settings['cateogries'])){
			
			$args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'terms'    => $settings['cateogries'],
                'field' => 'id',
                 ),
               );		
		} 
		
		$query = get_posts( $args );
		?>
        
		<div class="posts-content blog-masonry">
			<?php if ($query): ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
					<?php foreach ( $query as $key => $post ): ?>
						<div class="col">
							<div class="blog-1-post mb-40 wow fadeInUp">

								<!-- BLOG POST IMAGE -->
								<?php if(has_post_thumbnail($post->ID)): ?>
								<div class="blog-post-img">
									<div class="hover-overlay">
										<a href="<?php esc_url(the_permalink($post->ID)); ?>">
											<?php echo get_the_post_thumbnail( $post->ID, 'olmo-medium' ); ?>
										</a>
										<div class="item-overlay"></div>
									</div>
								</div>
								<?php endif; ?>

								<!-- BLOG POST TEXT -->
								<div class="blog-post-txt">

									<!-- Post Tag -->
									<p class="p-md post-tag">
										<?php if(!empty(get_the_category($post->ID))):?>
											<?php the_category(', ', '', $post->ID); ?>&ensp;|&ensp;
										<?php endif; ?>
										<a href="<?php esc_url(the_permalink($post->ID)); ?>"><?php echo get_the_date(get_option( 'date_format' ), $post->ID); ?></a>
									</p>	

									<!-- Post Link -->
									<h5 class="h5-md">
										<a href="<?php esc_url(the_permalink($post->ID)); ?>"><?php echo wp_trim_words( get_the_title($post->ID), 15, '' ); ?></a>
									</h5>

									<?php if($settings['description_show'] == 'yes'): ?>
									<!-- Text -->
									<p class="p-lg"><?php echo wp_trim_words( get_the_content('', '', $post->ID), 10, '' ); ?></p>
									<?php endif; ?>

									<?php if($settings['comment_show'] == 'yes'): ?>
										<!-- Post Meta -->
										<div class="post-meta">
											<p class="p-md">
												<a href="<?php echo esc_url(get_comments_link($post->ID)); ?>">
													<?php comments_number( esc_html__('0 Comments', 'olmo'), esc_html__('1 Comment', 'olmo'), esc_html__('% Comments', 'olmo'), $post->ID ) ?>
												</a> 
											</p>
										</div>
									<?php endif; ?>
								</div>	<!-- END BLOG POST TEXT -->
							</div>
						</div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>       
		</div>
    	<?php  
    }
    protected function content_template() {}
	
	public function get_post_categories(){
		$args = array( 'hide_empty=0' );
		$terms = get_terms( 'category', $args );
		$category = [];
		foreach ( $terms as $term ) {
			$category[$term->term_id] = [$term->name];
		}
		return $category;
	}
}