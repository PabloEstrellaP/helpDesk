
        $this->files = [];
                $rangeOldStart = (int) $vars[1];
                $rangeOldCount = (int) $vars[2];
                $rangeNewStart = (int) $vars[3];
                $rangeNewCount = isset($vars[4]) ? (int) $vars[4] : (int) $vars[2]; // @todo Ici, t'as pris un gros raccourci mon loulou
                $lines = [];
                        $lines[] = [FileChange::LINE_CONTEXT, $this->consumeTo("\n")];
                        $lines[] = [FileChange::LINE_ADD, $this->consumeTo("\n")];
                        $lines[] = [FileChange::LINE_REMOVE, $this->consumeTo("\n")];