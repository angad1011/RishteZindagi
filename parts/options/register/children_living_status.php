							<option value="Living with me" <?php if(isset($DatabaseCo->dbRow->status_children)){ if($DatabaseCo->dbRow->status_children == 'Living with me'){ echo 'selected';}} ?>>Living with me</option>
                            <option value="Not living with me" <?php if(isset($DatabaseCo->dbRow->status_children)){ if($DatabaseCo->dbRow->status_children == 'Not living with me'){ echo 'selected';}} ?>>Not living with me</option>