<?php namespace Anomaly\PostsModule\Post\Form\Command;

use Anomaly\PostsModule\Entry\Form\EntryFormBuilder;
use Anomaly\PostsModule\Post\Form\PostEntryFormBuilder;
use Anomaly\PostsModule\Type\Contract\TypeRepositoryInterface;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;

/**
 * Class AddEntryFormFromRequest
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\PostsModule\Post\Form\Command
 */
class AddEntryFormFromRequest implements SelfHandling
{

    use DispatchesJobs;

    /**
     * The multiple form builder.
     *
     * @var PostEntryFormBuilder
     */
    protected $builder;

    /**
     * Create a new AddEntryFormFromRequest instance.
     *
     * @param PostEntryFormBuilder $builder
     */
    public function __construct(PostEntryFormBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Handle the command.
     *
     * @param TypeRepositoryInterface $types
     * @param EntryFormBuilder        $builder
     * @param Request                 $request
     */
    public function handle(TypeRepositoryInterface $types, EntryFormBuilder $builder, Request $request)
    {
        $type = $types->find($request->get('type'));

        $this->builder->addForm('entry', $builder->setModel($type->getEntryModelName()));
    }
}
