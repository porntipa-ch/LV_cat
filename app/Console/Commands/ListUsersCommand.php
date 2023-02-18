<?php
use Illuminate\Console\Command;
use App\Models\User;

class ListUsersCommand extends Command
{
    protected $signature = 'users:list';

    protected $description = 'List all users and their roles';

    public function handle()
    {
        // Get all users with their roles
        $users = User::with('roles')->get();

        // Loop through each user and display their name and roles
        foreach ($users as $user) {
            $this->info($user->name . ': ');

            foreach ($user->roles as $role) {
                $this->info('- ' . $role->name);
            }

            $this->line('');
        }
    }
}

?>
