<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */
namespace WellCommerce\Bundle\LayoutBundle\DataGrid;

use WellCommerce\Bundle\CoreBundle\DataGrid\AbstractDataGrid;
use WellCommerce\Bundle\CoreBundle\DataGrid\Column\Column;
use WellCommerce\Bundle\CoreBundle\DataGrid\Column\ColumnCollection;
use WellCommerce\Bundle\CoreBundle\DataGrid\Column\Options\Appearance;
use WellCommerce\Bundle\CoreBundle\DataGrid\Column\Options\Filter;
use WellCommerce\Bundle\CoreBundle\DataGrid\Column\Options\Sorting;
use WellCommerce\Bundle\CoreBundle\DataGrid\DataGridInterface;

/**
 * Class LayoutBoxDataGrid
 *
 * @author Adam Piotrowski <adam@wellcommerce.org>
 */
class LayoutBoxDataGrid extends AbstractDataGrid implements DataGridInterface
{
    /**
     * {@inheritdoc}
     */
    public function configureColumns(ColumnCollection $collection)
    {
        $collection->add(new Column([
            'id'         => 'id',
            'caption'    => $this->trans('Id'),
            'sorting'    => new Sorting([
                'default_order' => Sorting::SORT_DIR_DESC
            ]),
            'appearance' => new Appearance([
                'width'   => 90,
                'visible' => false
            ]),
            'filter'     => new Filter([
                'type' => Filter::FILTER_BETWEEN
            ])
        ]));

        $collection->add(new Column([
            'id'         => 'name',
            'caption'    => $this->trans('Name'),
            'appearance' => new Appearance([
                'width' => 70,
            ]),
            'filter'     => new Filter([
                'type' => Filter::FILTER_INPUT
            ])
        ]));

        $collection->add(new Column([
            'id'         => 'identifier',
            'caption'    => $this->trans('Identifier'),
            'appearance' => new Appearance([
                'width' => 70,
            ]),
            'filter'     => new Filter([
                'type' => Filter::FILTER_INPUT
            ])
        ]));

        $collection->add(new Column([
            'id'         => 'boxType',
            'caption'    => $this->trans('Type'),
            'appearance' => new Appearance([
                'width' => 70,
            ]),
            'filter'     => new Filter([
                'type' => Filter::FILTER_INPUT
            ])
        ]));
    }
}